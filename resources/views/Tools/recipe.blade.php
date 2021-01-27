@extends('layouts.app')

@section('title', Lang::get('recipe.meta-title'))

@section('meta-desc', Lang::get('recipe.meta-desc'))

@section('meta-keyword', Lang::get('recipe.meta-keyword'))

@section('conical','/en/json-ld-recipe-schema-generator')

@section('en-link')
en/json-ld-recipe-schema-generator
@endsection

@section('id-link')
id/json-ld-recipe-schema-generator
@endsection

@section('content')
@push('style')
<style media="screen">
  @media only screen and (max-width: 1200px) and (min-width: 992px) {
    #copy {
      height: 50px;
    }

    #test {
      height: 50px;
    }
  }
</style>
@endpush
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
    <li class="breadcrumb-item active" style="color:#2F80ED"><b>JSON-LD recipe Schema Generator</b></li>
  </ol>
</nav>
<div class="card card-custom mb-5">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">JSON-LD recipe SCHEMA GENERATOR </h1>
      <small>@lang('recipe.subtitle')</small>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <div class="card-body">
        <div class="mb-5" id="formrecipe">
          <input type="text" name="" class="form-control mb-5 name" placeholder="@lang('recipe.name') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-7 keywords" placeholder="@lang('recipe.keywords') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-7 image" placeholder="@lang('recipe.image') :" value="" data-id="0">
          <div id="image"></div>
          <button type="button" class="btn btn-primary mb-7" name="button" id="add-imageUrl">
            <i class="flaticon2-plus"></i> @lang('recipe.btn-addImageUrl')
            </button>
          <input type="text" name="" class="form-control mb-7 description" placeholder="@lang('recipe.description') :" value="" data-id="0">

          <input type="text" name="" class="form-control mb-7 videoContentUrl" placeholder="@lang('recipe.videoContentUrl') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-7 videoEmbedUrl" placeholder="@lang('recipe.videoEmbedUrl') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-7 creator" placeholder="@lang('recipe.creator') :" value="" data-id="0">
          <input type="date" name="" class="form-control mb-7 datePublished" placeholder="@lang('recipe.datePublished') :" value="" data-id="0">

          <input type="number" min="0" name="" class="form-control mb-7 prepTime" placeholder="@lang('recipe.prepTime') :" value="" data-id="0">
          <input type="number" min="0" name="" class="form-control mb-7 cookTime" placeholder="@lang('recipe.cookTime') :" value="" data-id="0">

          <select name="" id="" class="form-control mb-7 recipeCategory" data-id="0">
            <option value="">@lang('recipe.recipeCategory')</option>
            <option value="Appetizer">Appetizer</option>
            <option value="Entree">Entree</option>
            <option value="Dessert">Dessert</option>
          </select>
          <input type="text" min="0" name="" class="form-control mb-7 recipeCuisine" placeholder="@lang('recipe.recipeCuisine') :" value="" data-id="0">
          <input type="number" min="0" name="" class="form-control mb-7 recipeYield" placeholder="@lang('recipe.recipeYield') :" value="" data-id="0">

          <div id="ingredients"></div>
          <button type="button" class="btn btn-primary mb-7" name="button" id="add-ingredients">
            <i class="flaticon2-plus"></i> @lang('recipe.btn-addIngredients')
          </button>

          <input type="text" name="" class="form-control mb-7 servingSize" placeholder="@lang('recipe.servingSize') :" value="" data-id="0">
          <input type="number" min="0" name="" class="form-control mb-7 calories" placeholder="@lang('recipe.calories') :" value="" data-id="0">
          <input type="number" min="0" name="" class="form-control mb-7 fatContent" placeholder="@lang('recipe.fatContent') :" value="" data-id="0">

          <div id="step"></div>
          <button type="button" class="btn btn-primary mb-7 stepField" name="button">
            <i class="flaticon2-plus"></i> @lang('recipe.btn-addStep')
          </button>

          <input type="number" min="0" name="" class="form-control mb-7 ratingValue" placeholder="@lang('recipe.ratingValue') :" value="" data-id="0">
          <input type="number" min="0" name="" class="form-control mb-7 ratingCount" placeholder="@lang('recipe.ratingCount') :" value="" data-id="0">
          <input type="number" min="0" name="" class="form-control mb-7 bestRating" placeholder="@lang('recipe.bestRating') :" value="" data-id="0">
          <input type="number" min="0" name="" class="form-control mb-7 worstRating" placeholder="@lang('recipe.worstRating') :" value="" data-id="0">
        </div>


        <div id="addReview"></div>
          <button type="button" class="btn btn-primary mb-7 addReview" name="button">
            <i class="flaticon2-plus"></i> @lang('recipe.btn-addReview')
          </button>
        {{-- <button type="button" class="btn btn-primary" name="button" id="add-imageUrl">
        <i class="flaticon2-plus"></i> @lang('recipe.btn-addImageUrl')
        </button> --}}
      </div>
    </div>
    <!--end::Card-->
  </div>
  <div class="col-lg-6">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <form class="" target="_blank" rel="nofollow noopener noreferrer" action="https://search.google.com/test/rich-results" method="post">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <button type="button" id="copy" class="btn btn-text-dark-50 btn-icon-primary font-weight-bold btn-hover-bg-light mr-3 form-control mb-5" name="button">
              <i class="far fa-copy"></i> @lang('recipe.btn-copy')
              </button>
            </div>
            <div class="col-lg-6">
              <button type="submit" id="test" class="btn btn-text-dark-50 btn-icon-primary font-weight-bold btn-hover-bg-light mr-3 form-control mb-5" name="button">
              <i class="fas fa-circle"></i> @lang('recipe.btn-test')</button>
            </div>
          </div>
          <textarea name="code_snippet" style="resize:none" rows="50" class="form-control" id="json-format"></textarea>
        </div>
      </form>
    </div>
    <!--end::Card-->
  </div>
  <!--end::Card-->
</div>
<div class="row" data-sticky-container>
  <div class="col-lg-8 mb-5">
    <!--begin::Card-->
    <div class="card card-custom">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('recipe.title')</h2>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <tbody>
            <tr>
              <td style="width:60%;" class="align-middle">
                <p>@lang('recipe.desc-1-1')</p>
              </td>
              <td class="align-middle"> <img id="1" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-1-min-1024x898.png" class="form-control" style="height:auto" alt="json 1 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('recipe.desc-1-2')</p>
              </td>
              <td class="align-middle"> <img id="2" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-2-min-1024x509.png" class="form-control" style="height:auto" alt="json 2 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('recipe.desc-1-3')</p>
              </td>
              <td class="align-middle"> <img id="3" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-3-min-1024x502.png" class="form-control" style="height:auto" alt="json 3 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('recipe.desc-1-4')</p>
                <p>@lang('recipe.desc-1-5')</p>
              </td>
              <td class="align-middle"> <img id="4" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-4-min-1024x556.png" class="form-control" style="height:auto" alt="json 4 min"> </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('recipe.title-2')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('recipe.desc-2-1')</p>
        <p>@lang('recipe.desc-2-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('recipe.title-3')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('recipe.desc-3-1')</p>
        <p>@lang('recipe.desc-3-2')</p>
        <table class="table" border="1px" bordercolor="#EBEDF3">
          <tbody>
            <tr>
              <th class="align-middle"> <i class="far fa-lightbulb icon-2x"></i> </th>
              <td>@lang('recipe.desc-3-3')</td>
            </tr>
          </tbody>
        </table>
        <p>@lang('recipe.desc-3-4')</p>
        <ul>
          <li>@lang('recipe.li-1')</li>
          <li>@lang('recipe.li-2')</li>
          <li>@lang('recipe.li-3')</li>
        </ul>
        <p>@lang('recipe.desc-3-5')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('recipe.title-4')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('recipe.desc-4-1')</p>
        <p>@lang('recipe.desc-4-2')</p>
        <p>@lang('recipe.desc-4-3')</p>
        <p>@lang('recipe.desc-4-4')</p>
        <p>@lang('recipe.desc-4-5')</p>
        <p>@lang('recipe.desc-4-6')</p>
        <p>@lang('recipe.desc-4-7')</p>
        <p>@lang('recipe.desc-4-8')</p>
        <p>@lang('recipe.desc-4-9')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('recipe.title-5')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('recipe.desc-5-1')</p>
        <p>@lang('recipe.desc-5-2')</p>
        <h3 class="font-weight-bold py-5">@lang('recipe.title-6')</h3>
        <p>@lang('recipe.desc-6-1')</p>
        <p>@lang('recipe.desc-6-2')</p>
        <p>@lang('recipe.desc-6-3')</p>
        <h3 class="font-weight-bold py-5">@lang('recipe.title-7')</h3>
        <p>@lang('recipe.desc-7-1')</p>
        <p>@lang('recipe.desc-7-2')</p>
        <p>@lang('recipe.desc-7-3')</p>
        <p>@lang('recipe.desc-7-4')</p>
        <h3 class="font-weight-bold py-5">@lang('recipe.title-8')</h3>
        <p>@lang('recipe.desc-8-1')</p>
        <p>@lang('recipe.desc-8-2')</p>
        <p>@lang('recipe.desc-8-3')</p>
        <p>@lang('recipe.desc-8-4')</p>
        <h3 class="font-weight-bold py-5">@lang('recipe.title-9')</h3>
        <p>@lang('recipe.desc-9-1')</p>
        <p>@lang('recipe.desc-9-2')</p>
        <p>@lang('recipe.desc-9-3')</p>
        <p>@lang('recipe.desc-9-4')</p>
        <p>@lang('recipe.desc-9-5')</p>
      </div>
    </div>
    <!--end::Card-->
  </div>
  @include('layouts/stickybar')
</div>
</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img class="img-responsive form-control" alt="image modal" style="height:auto;" src="" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection

@push('script')
<script type="text/javascript">
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal', function(e) {
      var image = $(e.relatedTarget).attr('src');
      $(".img-responsive").attr("src", image);
    });
  });
</script>
@endpush
@push('script')
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "@lang('home.homepage')",
      "item": "{{url('/')}}/{{$local}}"
    },{
      "@type": "ListItem",
      "position": 2,
      "name": "JSON-LD recipe Schema Generator"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/recipe-json.js')}}"></script>
@endpush
@section('json-ld-recipe')
active
@endsection
