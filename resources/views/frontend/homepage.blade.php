@extends('frontend.layout.app')

@section('content')
    @include('frontend.inc.headcontent')
    @include('frontend.inc.maincontent')
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            let _token   = $('meta[name="csrf-token"]').attr('content');


            $(window).on('load', function() {
                loadVot();
            });

            function loadVot() {
                $.ajax({
                    url: '/ajaxvot',
                    type: 'GET',
                    // dataType: 'JSON',
                    success: function(data) {
                        // console.log(data);
                        $('#onlinevot').empty();
                        $('#onlinevot').append(data);
                    }
                });
            }
            // Post Request

            $(document).on('click', '.onlinePoll', function(e) {
                e.preventDefault();
                let id = $('input[name="id"]').val();
                let vot = $('input[name="vot"]:checked').val();

                $.ajax({
                    url: '/ajax/vot/update',
                    type: 'POST',
                    // dataType: 'JSON',
                    data:{
                        _token: _token,
                        id,
                        vot
                    },
                    success: function(data) {
                        loadVot();
                        // console.log('data',data)
                        // console.log('post request send');
                    }
                });

                // console.log('clicked')

            });
        });
    </script>
@endpush
