<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <meta charset="utf-8" />
  <title>Login Page</title>
  <meta name="description" content="Login page example" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->


  <!--begin::Page Custom Styles(used by this page)-->
  <link href="/css/pages/login/classic/login-4.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <!--end::Page Custom Styles-->

  <!--begin::Global Theme Styles(used by all pages)-->
  <link href="/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <link href="/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <link href="/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <!--end::Global Theme Styles-->

  <!--begin::Layout Themes(used by all pages)-->
  <!--end::Layout Themes-->

  <link rel="shortcut icon" href="/media/logos/favicon.ico" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">

  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
      <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('/media/bg/bg-3.jpg');">
        <div class="login-form text-center p-7 position-relative overflow-hidden">
          <!--begin::Login Header-->
          <div class="d-flex flex-center mb-15">
            <a href="#">
              <img src="/media/logos/logo-letter-9.png" class="max-h-75px" alt="" />
            </a>
          </div>
          <!--end::Login Header-->

          <!--begin::Login Sign in form-->
          <div class="login-signin">
            <div class="mb-20">
              <h3>Welcome to CMLABS Staging Free Tools</h3>
              <div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
            </div>
            <form class="form" action="" method="POST">
              <div class="form-group mb-5">
                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="name" autocomplete="off" />
              </div>
              <div class="form-group mb-5">
                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" />
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                <div class="checkbox-inline">
                  <label class="checkbox m-0 text-muted">
                    <input type="checkbox" name="remember" />
                    <span></span>
                    Remember me
                  </label>
                </div>
              </div>
              <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button>
            </form>
          </div>
          <!--end::Login Sign in form-->
        </div>
      </div>
    </div>
    <!--end::Login-->
  </div>
  <!--end::Main-->

  <!--begin::Global Config(global config for global JS scripts)-->
  <script>
    var KTAppSettings = {
      "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
      },
      "colors": {
        "theme": {
          "base": {
            "white": "#ffffff",
            "primary": "#8950FC",
            "secondary": "#E5EAEE",
            "success": "#1BC5BD",
            "info": "#8950FC",
            "warning": "#FFA800",
            "danger": "#F64E60",
            "light": "#F3F6F9",
            "dark": "#212121"
          },
          "light": {
            "white": "#ffffff",
            "primary": "#E1E9FF",
            "secondary": "#ECF0F3",
            "success": "#C9F7F5",
            "info": "#EEE5FF",
            "warning": "#FFF4DE",
            "danger": "#FFE2E5",
            "light": "#F3F6F9",
            "dark": "#D6D6E0"
          },
          "inverse": {
            "white": "#ffffff",
            "primary": "#ffffff",
            "secondary": "#212121",
            "success": "#ffffff",
            "info": "#ffffff",
            "warning": "#ffffff",
            "danger": "#ffffff",
            "light": "#464E5F",
            "dark": "#ffffff"
          }
        },
        "gray": {
          "gray-100": "#F3F6F9",
          "gray-200": "#ECF0F3",
          "gray-300": "#E5EAEE",
          "gray-400": "#D6D6E0",
          "gray-500": "#B5B5C3",
          "gray-600": "#80808F",
          "gray-700": "#464E5F",
          "gray-800": "#1B283F",
          "gray-900": "#212121"
        }
      },
      "font-family": "Poppins"
    };
  </script>
  <!--end::Global Config-->

  <!--begin::Global Theme Bundle(used by all pages)-->
  <script src="/plugins/global/plugins.bundle.js?v=7.0.6"></script>
  <script src="/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
  <script src="/js/scripts.bundle.js?v=7.0.6"></script>
  <!--end::Global Theme Bundle-->


  <!--begin::Page Scripts(used by this page)-->
  <script src="/js/pages/custom/login/login-general.js?v=7.0.6"></script>
  <script src="/js/pages/features/miscellaneous/toastr.js?v=7.0.5"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
  <script type="text/javascript">
    toastr.options = {
      "closeButton": true,
      "closeClass": "toast-close-button",
      "closeDuration": 300,
      "closeEasing": "swing",
      "closeHtml": "<button><i class=\"icon-off\"><\/i><\/button>",
      "closeMethod": "fadeOut",
      "closeOnHover": true,
      "containerId": "toast-container",
      "debug": false,
      "escapeHtml": false,
      "extendedTimeOut": 10000,
      "hideDuration": 1000,
      "hideEasing": "linear",
      "hideMethod": "fadeOut",
      "iconClass": "toast-info",
      "iconClasses": {
        "error": "toast-error",
        "info": "toast-info",
        "success": "toast-success",
        "warning": "toast-warning"
      },
      "messageClass": "toast-message",
      "newestOnTop": false,
      "onHidden": null,
      "onShown": null,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "progressBar": true,
      "progressClass": "toast-progress",
      "rtl": false,
      "showDuration": 300,
      "showEasing": "swing",
      "showMethod": "fadeIn",
      "tapToDismiss": true,
      "target": "body",
      "timeOut": 5000,
      "titleClass": "toast-title",
      "toastClass": "toast"
    };
  </script>
  @if ($errors->any())
      @foreach ($errors->all() as $error)
          <script>
              toastr.error('{{ $error }}');
          </script>
      @endforeach
  @endif
  <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
