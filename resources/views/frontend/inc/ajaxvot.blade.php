@php
use App\Models\Vot\Vot;
use Rakibhstu\Banglanumber\NumberToBangla;
$numto = new NumberToBangla();

$vot = Vot::get()->last();
if ($vot && $vot->total_vot > 0) {
    $yes = sprintf('%.2f', (100 * $vot->yes) / $vot->total_vot);
    $no = sprintf('%.2f', (100 * $vot->no) / $vot->total_vot);
    $no_comment = sprintf('%.2f', (100 * $vot->no_comment) / $vot->total_vot);


}
@endphp


<div class="card">
    <div class="card-header">
        <h4>অনলাইন জরিপ</h4>
    </div>
    @if ($vot)
        <div class="card-body">
            <p>{{ $vot->description }}</p>
            <div class="row">
                <div class="col-sm-12 mt-4">
                    @if ($vot->yes > 0)
                        <label for="">হ্যাঁ  ({{ $numto->bnNum($vot->yes)}})</label>
                        <div class="row align-items-center g-0 mb-2 pb-1">
                            <div class="col">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width:{{ $yes }}%;" aria-valuenow="7"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-auto">

                                <div class="fw-medium ms-2">
                                    {{$numto->bnNum($yes)}}% </div>
                            </div>
                        </div>
                    @endif

                    @if ($vot->no > 0)
                        <label for="">না ({{$numto->bnNum($vot->no)}})</label>
                        <div class="row align-items-center g-0 mb-2 pb-1">
                            <div class="col">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width:{{ $no }}%;" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="0"></div>
                                </div>
                            </div>
                            <div class="col-auto">

                                <div class="fw-medium ms-2">
                                    {{$numto->bnNum($no)}}%</div>
                            </div>
                        </div>
                    @endif
                    
                    @if ($vot->no_comment > 0)
                        <label for=""> মন্তব্য নেই ({{$numto->bnNum($vot->no_comment)}})</label>
                        <div class="row align-items-center g-0 mb-2 pb-1">
                            <div class="col">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ $no_comment }}%;" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="0"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="fw-medium ms-2">

                                    {{$numto->bnNum($no_comment)}}%
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12">
                <div id="poll_result"></div>
            </div>

            <form
            class="mt-1 survey-hide" action="" method="post"
                id="surveyForm" >

                <input type="hidden" name="id" value="{{ $vot->id}}">
                <table cellpadding="0" cellspacing="5" border="0" width="100%" class="survey-tbl mb-2">
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <input type="radio" name="vot" value="yes ">
                            </td>
                            <td>হ্যাঁ</td>
                            <td class="text-center">
                                <input type="radio" name="vot"  value="no ">
                            </td>
                            <td>না </td>

                            <td class="text-center">
                                <input type="radio" name="vot"  value="no_comment ">
                            </td>
                            <td>মন্তব্য নেই</td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit"  class="btn btn-success p-2  onlinePoll"> মতামত দিন </button>
            </form>
        </div>
    @endif
</div>
