@extends('layouts.admin.boardTemplate')
@section('main_head')
    @parent
    <link href="{{ URL::asset('admin/css/admin.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ URL::asset('admin/css/lumino.css') }}" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@stop

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading panou-titlu">
            <i class="fa fa-wrench"></i> Update
        </div>
        <div class="panel-body">
        <div class="alert-danger" style="color:black;font-size:16px;margin-bottom: 10px;padding: 10px;">
           Soon Auto-Update will be available.
         </div>
    <div class="panel panel-primary">
                <div class="panel-heading" style="background:#5cb85c;"><b><i class="glyphicon glyphicon-home"></i> Installed version:{{ $version['version-name'] }} - Latest version:ViralFB v{{ $latestversion }}</b> - You are up-to-date!</div>
  
            </div>
   
        </div>
    </div>
 <!-- Modal -->

    <div id="imagepopup" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Follow this image</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success">
                       <img src="{{ URL::asset('files/v5_personaltoken_checkbox.jpg') }}" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

@stop
@section('foot')
    @parent
    <script type="text/javascript" src="{{ URL::asset('admin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/packages/barryvdh/elfinder/js/standalonepopup.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('admin/js/activateapp.js') }}"></script>
    <script>
        function CheckIfChanged() {
            var inputvar = $('#logo').val();
            if (inputvar === '') {
                inputvar = 'images/choose-image.jpg';
            }
            $('#chooselogo').html('<img class="thumbnail popup_selector" data-inputid="logo" src="{{ URL::asset('/') }}' + inputvar + '" style="width:200px; cursor:pointer;" >');
        }
        setInterval(function () {
            CheckIfChanged();
        }, 1000);

        function CheckIfChangedfavicon() {
            var inputvarfavicon = $('#favicon').val();
            if (inputvarfavicon === '') {
                inputvarfavicon = 'images/choose-image.jpg';
            }
            $('#choosefavicon').html('<img class="thumbnail popup_selector" data-inputid="favicon" src="{{ URL::asset('/') }}' + inputvarfavicon + '" style="width:50px; cursor:pointer;" >');
        }
        setInterval(function () {
            CheckIfChangedfavicon();
        }, 1000);

        function CheckIfChangedGraphImg() {
            var inputvarGraphImg = $('#graphimg').val();
            if (inputvarGraphImg === '') {
                inputvarGraphImg = 'images/choose-image.jpg';
            }
            $('#choosegraphimg').html('<img class="thumbnail popup_selector" data-inputid="graphimg" src="{{ URL::asset('/') }}' + inputvarGraphImg + '" style="width:200px; cursor:pointer;" >');
        }
        setInterval(function () {
            CheckIfChangedGraphImg();
        }, 1000);

        @if(session()->has('message'))
            $('#myModal').modal('show');
        setTimeout(function () {
            $('#myModal').modal('hide');
        }, 3000);
        @endif
    </script>
@stop