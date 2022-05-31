<?php

/* activations/parameters.yml */
class __TwigTemplate_2295084df699b0d66165f4b2bae5769ecb13c5c287a2fd088df8629631a85fcc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "activations/parameters.yml"));

        // line 1
        echo "# This file is auto-generated during the composer install
parameters:
    database_host: db638460279.db.1and1.com
    database_port: 3306
    database_name: db638460279
    database_user: dbo638460279
    database_password: syMFony16
    mailer_transport: smtp
    mailer_encryption: ssl
    mailer_host: smtp.gmail.com
    mailer_user: elm3hdi@gmail.com
    mailer_password: ayawew007dz
    secret: dae049ea70d7f5c500f96eb2ddfd7ad40499d508
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "activations/parameters.yml";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# This file is auto-generated during the composer install
parameters:
    database_host: db638460279.db.1and1.com
    database_port: 3306
    database_name: db638460279
    database_user: dbo638460279
    database_password: syMFony16
    mailer_transport: smtp
    mailer_encryption: ssl
    mailer_host: smtp.gmail.com
    mailer_user: elm3hdi@gmail.com
    mailer_password: ayawew007dz
    secret: dae049ea70d7f5c500f96eb2ddfd7ad40499d508
", "activations/parameters.yml", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\activations\\parameters.yml");
    }
}
