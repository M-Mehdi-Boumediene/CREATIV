<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2ed03e8a1a46270b692c978fbb8b8f3521a3dcda5396499377595efaf276367a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <title> e-Business</title>
    <!-- Style core CSS -->
    <link rel=\"stylesheet\"  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/css/jquery.dataTables_themeroller.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\"  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/core.css"), "html", null, true);
        echo "\" />
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel=\"stylesheet\"  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" />
    <!-- Custom styles for this template -->
</head>

<style>

    body {
        font-family: arial, sans-serif,tahoma;
        background-color: #f7f7f7;
        position: relative;
        margin: 0px;
        padding: 0px;
        font-size: 12px;
    }

    .btn-glow.primary {
        border-color: #2480c2;
        color: #fff;
        text-shadow: rgba(0,0,0,0.35) 0 1px 0;
        background: #54b3ff;
        background: -moz-linear-gradient(top, #54b3ff 0%, #0078d9 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #54b3ff), color-stop(100%, #0078d9));
        background: -webkit-linear-gradient(top, #54b3ff 0%, #0078d9 100%);
        background: linear-gradient(#54b3ff, #0078d9);
        background: -o-linear-gradient(top, #54b3ff 0%, #0078d9 100%);
        background: -ms-linear-gradient(top, #54b3ff 0%, #0078d9 100%);
    }
    .btn-glow {
        font-size: 13px;
        border-radius: 4px;
        color: #333;
        padding: 5px 10px;
        text-align: center;
        box-shadow: 0px 1px 0px 0px rgba(255,255,255,0.2) inset, 0px 1px 0px 0px #ccc;
        display: inline-block;
        border: 1px solid #e5e5e5;
        vertical-align: middle;
        cursor: pointer;
        background: #ffffff;
        background: -moz-linear-gradient(top, #fff 0%, #eef0f1 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #eef0f1));
        background: -webkit-linear-gradient(top, #fff 0%, #eef0f1 100%);
        background: -o-linear-gradient(top, #fff 0%, #eef0f1 100%);
        background: -ms-linear-gradient(top, #fff 0%, #eef0f1 100%);
        background: linear-gradient(to bottom, #fff 0%, #eef0f1 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eef0f1',GradientType=0 );
    }
    .btn-glow.primary:hover {
        background: #389beb;
        background: -moz-linear-gradient(top, #389beb 0%, #0078d9 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #389beb), color-stop(100%, #0078d9));
        background: -webkit-linear-gradient(top, #389beb 0%, #0078d9 100%);
        background: linear-gradient(#389beb, #0078d9);
        background: -o-linear-gradient(top, #389beb 0%, #0078d9 100%);
        background: -ms-linear-gradient(top, #389beb 0%, #0078d9 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='rgb(56, 155, 235)', endColorstr='#0078d9',GradientType=0 );
    }
    .login-wrapper .box .login {
        text-transform: uppercase;
        font-size: 13px;
        padding: 8px 30px;
    }
    .login-wrapper {
        position: absolute;
        left: 0;
        right: 0;
        text-align: center;
    }

    .login-wrapper .box {
        margin: 0 auto;
        padding: 35px 0 30px;
        float: none;
        width: 400px;
        border-radius: 2px;
        background: #fff none repeat scroll 0 0;
        border: 1px solid #e7eaec;
        box-shadow: -6px 14px 39px -1px rgba(0,0,0,0.19);
    }
    .login-wrapper select.form-control, .login-wrapper .box input[type=\"text\"], .login-wrapper .box input[type=\"password\"] {
        font-size: 15px;
        height: 40px;
        margin-bottom: 18px;
        border-color: #b2bfc7;
        padding-left: 12px;

    }
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        font-style: italic;
    }
    ::-moz-placeholder { /* Firefox 19+ */
        font-style: italic;
    }
    :-ms-input-placeholder { /* IE 10+ */
        font-style: italic;
    }
    :-moz-placeholder { /* Firefox 18- */
        font-style: italic;
    }
    .login-wrapper .box .content-wrap .help-block, .login-wrapper .box .content-wrap h6, .login-wrapper .box .content-wrap label {
        text-align: left;
        display: block;
        color: #626262;
    }

    label {

        margin-bottom: 5px;
        font-weight: bold;
    }
    .login-wrapper .box .content-wrap {
        width: 82%;
        margin: 0 auto;
    }
    .login-wrapper .box .content-wrap .help-block, .login-wrapper .box .content-wrap h6, .login-wrapper .box .content-wrap label {
        text-align: left;
        display: block;
        color: #626262;
    }
    .login-wrapper .box h6 {
        text-transform: uppercase;
        margin: 0 0 30px 0;
        font-size: 18px;
        font-weight: 600;
    }

    .login-wrapper .box .remember label {
        float: left;
        color: #4a576a;
        font-size: 13px;
        font-weight: normal;

    }
    .login-wrapper .logo {
        margin-bottom: 25px;
        position: relative;
        left: -2px;
    }
    .login-wrapper .box .remember input[type=\"checkbox\"] {
        float: left;
        margin-right: 8px;
    }
    a {
        color: #428bca;
        text-decoration: none;
    }
    html.main_html body, body {
        padding-top: 49px;
        -webkit-tap-highlight-color: transparent;
    }
    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.428571429;
        color: #555555;
        vertical-align: middle;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
        -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
    .login-wrapper .box .remember {
        display: block;
        overflow: hidden;
        margin-bottom: 20px;
        margin-top: -8px;
    }
    input, button, select, textarea {
        font-family: Tahoma, Geneva, sans-serif;
    }

</style>


<body class=\"login\">

<div class=\"login-wrapper\" style=\"top: 20px;\">



    <a href=\"\">
        <img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/logo2.svg"), "html", null, true);
        echo "\" width=\"300\" >
    </a>
    <br><br>



    ";
        // line 207
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 209
        echo "




</div>


</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 207
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 208
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 208,  272 => 207,  255 => 209,  253 => 207,  244 => 201,  54 => 14,  49 => 12,  45 => 11,  41 => 10,  35 => 7,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <title> e-Business</title>
    <!-- Style core CSS -->
    <link rel=\"stylesheet\"  href=\"{{ asset('css/select2.css') }}\" />
    <link rel=\"stylesheet\"  href=\"{{ asset('datatables/css/jquery.dataTables_themeroller.css') }}\" />
    <link rel=\"stylesheet\"  href=\"{{ asset('css/core.css') }}\" />
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel=\"stylesheet\"  href=\"{{ asset('css/ie10-viewport-bug-workaround.css') }}\" />
    <!-- Custom styles for this template -->
</head>

<style>

    body {
        font-family: arial, sans-serif,tahoma;
        background-color: #f7f7f7;
        position: relative;
        margin: 0px;
        padding: 0px;
        font-size: 12px;
    }

    .btn-glow.primary {
        border-color: #2480c2;
        color: #fff;
        text-shadow: rgba(0,0,0,0.35) 0 1px 0;
        background: #54b3ff;
        background: -moz-linear-gradient(top, #54b3ff 0%, #0078d9 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #54b3ff), color-stop(100%, #0078d9));
        background: -webkit-linear-gradient(top, #54b3ff 0%, #0078d9 100%);
        background: linear-gradient(#54b3ff, #0078d9);
        background: -o-linear-gradient(top, #54b3ff 0%, #0078d9 100%);
        background: -ms-linear-gradient(top, #54b3ff 0%, #0078d9 100%);
    }
    .btn-glow {
        font-size: 13px;
        border-radius: 4px;
        color: #333;
        padding: 5px 10px;
        text-align: center;
        box-shadow: 0px 1px 0px 0px rgba(255,255,255,0.2) inset, 0px 1px 0px 0px #ccc;
        display: inline-block;
        border: 1px solid #e5e5e5;
        vertical-align: middle;
        cursor: pointer;
        background: #ffffff;
        background: -moz-linear-gradient(top, #fff 0%, #eef0f1 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #eef0f1));
        background: -webkit-linear-gradient(top, #fff 0%, #eef0f1 100%);
        background: -o-linear-gradient(top, #fff 0%, #eef0f1 100%);
        background: -ms-linear-gradient(top, #fff 0%, #eef0f1 100%);
        background: linear-gradient(to bottom, #fff 0%, #eef0f1 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eef0f1',GradientType=0 );
    }
    .btn-glow.primary:hover {
        background: #389beb;
        background: -moz-linear-gradient(top, #389beb 0%, #0078d9 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #389beb), color-stop(100%, #0078d9));
        background: -webkit-linear-gradient(top, #389beb 0%, #0078d9 100%);
        background: linear-gradient(#389beb, #0078d9);
        background: -o-linear-gradient(top, #389beb 0%, #0078d9 100%);
        background: -ms-linear-gradient(top, #389beb 0%, #0078d9 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='rgb(56, 155, 235)', endColorstr='#0078d9',GradientType=0 );
    }
    .login-wrapper .box .login {
        text-transform: uppercase;
        font-size: 13px;
        padding: 8px 30px;
    }
    .login-wrapper {
        position: absolute;
        left: 0;
        right: 0;
        text-align: center;
    }

    .login-wrapper .box {
        margin: 0 auto;
        padding: 35px 0 30px;
        float: none;
        width: 400px;
        border-radius: 2px;
        background: #fff none repeat scroll 0 0;
        border: 1px solid #e7eaec;
        box-shadow: -6px 14px 39px -1px rgba(0,0,0,0.19);
    }
    .login-wrapper select.form-control, .login-wrapper .box input[type=\"text\"], .login-wrapper .box input[type=\"password\"] {
        font-size: 15px;
        height: 40px;
        margin-bottom: 18px;
        border-color: #b2bfc7;
        padding-left: 12px;

    }
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        font-style: italic;
    }
    ::-moz-placeholder { /* Firefox 19+ */
        font-style: italic;
    }
    :-ms-input-placeholder { /* IE 10+ */
        font-style: italic;
    }
    :-moz-placeholder { /* Firefox 18- */
        font-style: italic;
    }
    .login-wrapper .box .content-wrap .help-block, .login-wrapper .box .content-wrap h6, .login-wrapper .box .content-wrap label {
        text-align: left;
        display: block;
        color: #626262;
    }

    label {

        margin-bottom: 5px;
        font-weight: bold;
    }
    .login-wrapper .box .content-wrap {
        width: 82%;
        margin: 0 auto;
    }
    .login-wrapper .box .content-wrap .help-block, .login-wrapper .box .content-wrap h6, .login-wrapper .box .content-wrap label {
        text-align: left;
        display: block;
        color: #626262;
    }
    .login-wrapper .box h6 {
        text-transform: uppercase;
        margin: 0 0 30px 0;
        font-size: 18px;
        font-weight: 600;
    }

    .login-wrapper .box .remember label {
        float: left;
        color: #4a576a;
        font-size: 13px;
        font-weight: normal;

    }
    .login-wrapper .logo {
        margin-bottom: 25px;
        position: relative;
        left: -2px;
    }
    .login-wrapper .box .remember input[type=\"checkbox\"] {
        float: left;
        margin-right: 8px;
    }
    a {
        color: #428bca;
        text-decoration: none;
    }
    html.main_html body, body {
        padding-top: 49px;
        -webkit-tap-highlight-color: transparent;
    }
    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.428571429;
        color: #555555;
        vertical-align: middle;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
        -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
    .login-wrapper .box .remember {
        display: block;
        overflow: hidden;
        margin-bottom: 20px;
        margin-top: -8px;
    }
    input, button, select, textarea {
        font-family: Tahoma, Geneva, sans-serif;
    }

</style>


<body class=\"login\">

<div class=\"login-wrapper\" style=\"top: 20px;\">



    <a href=\"\">
        <img src=\"{{ asset('assets/img/logo/logo2.svg') }}\" width=\"300\" >
    </a>
    <br><br>



    {% block fos_user_content %}
    {% endblock fos_user_content %}





</div>


</body>
</html>
", "@FOSUser/layout.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
