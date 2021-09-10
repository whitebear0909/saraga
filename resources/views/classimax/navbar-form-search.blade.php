@extends('layouts.app')
@section('body')
        <nav class="navbar navbar-expand shadow-sm">
            <div class="container">
              <a class="navbar-brand" href="javascript:history.back()" data-dismiss="modal">
                <img src="{{ asset('images/close-icon.svg') }}" alt="" class="close-icon" title="close">
              </a>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto p-2">
                  <li class="nav-item active">      
                        <b class="text-saraga">
                            Pencarian
                        </b>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <!-- Modal body -->
        <form method="GET" action="{{ route('field-search') }}">
            <div class="modal-body container">
                <div class="form-row pt-3">
                    @component('search-input-group')
                    @endcomponent
                    @component('search')
                    @endcomponent
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer container fixed-bottom">
                <button type="submit" class="btn btn-block button-saraga">Cari Lapang</button>
            </div>
        </form>
        <style type="text/css">
            .search-date-component{
                display: none;
            }
        </style>
@endsection