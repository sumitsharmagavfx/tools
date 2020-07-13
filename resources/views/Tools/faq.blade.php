@extends('layouts.app')

@section('title')
    STRIKETHROUGH
@endsection

@section('content')
        <div class="card card-custom card-stretch" id="kt_page_stretched_card">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Tools Tittle <small>Tools Description</small></h3>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label>Label</label>
                        <input type="text" class="form-control" placeholder="Input"/><br>
                        <button type="reset" class="btn btn-primary mr-2" style="margin-bottom: 20px;" >Button</button>
                    </div>
                </div>
              </form>
              <!--end::Form-->

                <div class="card-body">
                <span class="font-size-h1 d-block d-block font-weight-boldest text-dark-75 py-2">Title Card</span>
                    <p class="mb-15 d-flex flex-column">
                        <span>Description Card</span><br>
                    </p>
                </div>
              </div>





@endsection
