<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* registration/register.html.twig */
class __TwigTemplate_78cf308c630a816916c7075a50034af5e73d0aac9ec0644922671f777847dd13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "S'enregister";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 7
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 form-info mx-auto p-4 my-3\">
                        <h3 class=\"text-extrabold my-2\">Créé un nouveau compte</h3>
                        <form id=\"register-form\" role=\"form\" method=\"post\" accept-char=\"UTF-8\" autocomplete=\"off\" data-parsley-validate>
                             ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t     <div class=\"custom-input-div\">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "firstname", [], "any", false, false, false, 18), 'label', ["label" => "Nom d'utilisateur"]);
        echo "
                                <div class='red-text'>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'errors');
        echo "</div>
                            </div>
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "firstname", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "custom-field-form", "data-parsley-trigger" => "change", "data-parsley-error-message" => "Veuillez saisir un nom"]]);
        // line 25
        echo "
                            <div class=\"custom-input-div\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'label', ["label" => "Votre Email"]);
        echo "
                                <div class='red-text'>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'errors');
        echo "</div>
                            </div>
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "custom-field-form", "data-parsley-trigger" => "change", "data-parsley-error-message" => "Une adresse mail valide est nécessaire."]]);
        // line 34
        echo "

                            <div class=\"custom-input-div\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), 'label', ["label" => "Mot de passe"]);
        echo "
                                <i class=\"fa fa-eye show-password\"></i>
                                <div class='red-text'>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "password", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), 'errors');
        echo "</div>
                            </div>
                             ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), "first", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "custom-field-form", "data-parsley-trigger" => "change", "data-parsley-minlength" => "6", "data-parsley-error-message" => "Le mot de passe doit contenir au moins 6 caractères."]]);
        // line 46
        echo "

                             <div class=\"custom-input-div\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "second", [], "any", false, false, false, 49), 'label', ["label" => "Confirmez votre mot de passe."]);
        echo "
                                <i class=\"fa fa-eye show-password\"></i>
                                 <div class='red-text'>";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), "second", [], "any", false, false, false, 51), 'errors');
        echo "</div>
                            </div>
                             ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), "second", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "custom-field-form", "data-parsley-trigger" => "change", "data-parsley-equalto" => "#password", "data-parsley-error-message" => "Les mots de passes ne correspondent pas."]]);
        // line 58
        echo "
                            <div class=\"checkbox mt-3\">

                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "agreeTerms", [], "any", false, false, false, 61), 'widget', ["attr" => ["oninvalid" => "alert(\"Vous devez accepter les conditions d'utilisation\")"]]);
        echo "
                                <label for=\"registration_form_agreeTerms\">J'ai lu et accepte les <a class=\"links-login\" href=\"#!\" target=\"_blank\">Conditions d'utilisation</a></label>
                                <div class='red-text'>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "agreeTerms", [], "any", false, false, false, 63), 'errors');
        echo "</div>
                            </div>
\t\t\t\t\t\t\t<div class=\"d-flex\">
                            \t<button type=\"submit\" class=\"button-update-profile my-3 mx-auto\">Crée mon compte</button>
                            </div>
                               ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
                               <div class=\"links-login text-center\">
                                <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Vous avez déjà un compte? Cliquer ici! </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


";
        // line 188
        echo "\t\t\t\t\t\t\t";
        // line 380
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 380,  212 => 188,  199 => 70,  194 => 68,  186 => 63,  181 => 61,  176 => 58,  174 => 53,  169 => 51,  164 => 49,  159 => 46,  157 => 41,  152 => 39,  147 => 37,  142 => 34,  140 => 30,  135 => 28,  131 => 27,  127 => 25,  125 => 21,  120 => 19,  116 => 18,  111 => 16,  102 => 9,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S'enregister{% endblock %}

{% block body %}
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 form-info mx-auto p-4 my-3\">
                        <h3 class=\"text-extrabold my-2\">Créé un nouveau compte</h3>
                        <form id=\"register-form\" role=\"form\" method=\"post\" accept-char=\"UTF-8\" autocomplete=\"off\" data-parsley-validate>
                             {{ form_start(registrationForm) }}
\t\t\t\t\t\t\t     <div class=\"custom-input-div\">
                            {{ form_label(registrationForm.firstname, 'Nom d\\'utilisateur')}}
                                <div class='red-text'>{{ form_errors(registrationForm.email)}}</div>
                            </div>
                            {{ form_widget(registrationForm.firstname, { 'attr': {
                             'class': 'custom-field-form',
                            'data-parsley-trigger' : \"change\",
                            'data-parsley-error-message' : \"Veuillez saisir un nom\"
                            } }) }}
                            <div class=\"custom-input-div\">
                            {{ form_label(registrationForm.email, 'Votre Email')}}
                                <div class='red-text'>{{ form_errors(registrationForm.email)}}</div>
                            </div>
                            {{ form_widget(registrationForm.email, { 'attr': {
                             'class': 'custom-field-form',
                            'data-parsley-trigger' : \"change\",
                            'data-parsley-error-message' : \"Une adresse mail valide est nécessaire.\"
                            } }) }}

                            <div class=\"custom-input-div\">
                            {{ form_label(registrationForm.password.first, 'Mot de passe')}}
                                <i class=\"fa fa-eye show-password\"></i>
                                <div class='red-text'>{{ form_errors(registrationForm.password.first) }}</div>
                            </div>
                             {{ form_widget(registrationForm.password.first, { 'attr': {
                            'class': 'custom-field-form',
                            'data-parsley-trigger' : \"change\",
                            'data-parsley-minlength' : \"6\",
                            'data-parsley-error-message' : \"Le mot de passe doit contenir au moins 6 caractères.\"
                            } }) }}

                             <div class=\"custom-input-div\">
                            {{ form_label(registrationForm.password.second, 'Confirmez votre mot de passe.')}}
                                <i class=\"fa fa-eye show-password\"></i>
                                 <div class='red-text'>{{ form_errors(registrationForm.password.second)}}</div>
                            </div>
                             {{ form_widget(registrationForm.password.second, { 'attr': {
                            'class': 'custom-field-form',
                            'data-parsley-trigger' : \"change\",
                            'data-parsley-equalto' :\"#password\",
                            'data-parsley-error-message' : \"Les mots de passes ne correspondent pas.\"
                            } }) }}
                            <div class=\"checkbox mt-3\">

                            {{ form_widget(registrationForm.agreeTerms, { 'attr' :{'oninvalid' : 'alert(\"Vous devez accepter les conditions d\\'utilisation\")'}  }) }}
                                <label for=\"registration_form_agreeTerms\">J'ai lu et accepte les <a class=\"links-login\" href=\"#!\" target=\"_blank\">Conditions d'utilisation</a></label>
                                <div class='red-text'>{{ form_errors(registrationForm.agreeTerms) }}</div>
                            </div>
\t\t\t\t\t\t\t<div class=\"d-flex\">
                            \t<button type=\"submit\" class=\"button-update-profile my-3 mx-auto\">Crée mon compte</button>
                            </div>
                               {{ form_end(registrationForm) }}
                               <div class=\"links-login text-center\">
                                <a href=\"{{ path('login') }}\">Vous avez déjà un compte? Cliquer ici! </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


{# 
<div class=\"antialiased sans-serif bg-gray-200\">
\t<div x-data=\"appTest()\" x-cloak>
\t\t<div class=\"max-w-3xl mx-auto px-4 py-10\">

\t\t\t<div x-show.transition=\"step === 'complete'\">
\t\t\t\t<div class=\"bg-white rounded-lg p-10 flex items-center shadow justify-between\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<svg class=\"mb-4 h-20 w-20 text-green-500 mx-auto\" viewBox=\"0 0 20 20\" fill=\"currentColor\">  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"/></svg>

\t\t\t\t\t\t<h2 class=\"text-2xl mb-4 text-gray-800 text-center font-bold\">Registration Success</h2>

\t\t\t\t\t\t<div class=\"text-gray-600 mb-8\">
\t\t\t\t\t\t\tThank you. We have sent you an email to demo@demo.test. Please click the link in the message to activate your account.
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button
\t\t\t\t\t\t\t@click=\"step = 1\"
\t\t\t\t\t\t\tclass=\"w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border\" 
\t\t\t\t\t\t>Back to home</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div x-show.transition=\"step != 'complete'\">\t
\t\t\t\t<!-- Top Navigation -->
\t\t\t\t<div class=\"border-b-2 py-4\">
\t\t\t\t\t<div class=\"uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight\" x-text=\"`Step: \${step} of 3`\"></div>
\t\t\t\t\t<div class=\"flex flex-col md:flex-row md:items-center md:justify-between\">
\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t<div x-show=\"step === 1\">
\t\t\t\t\t\t\t\t<div class=\"text-lg font-bold text-gray-700 leading-tight\">Your Profile</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div x-show=\"step === 2\">
\t\t\t\t\t\t\t\t<div class=\"text-lg font-bold text-gray-700 leading-tight\">Your Password</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div x-show=\"step === 3\">
\t\t\t\t\t\t\t\t<div class=\"text-lg font-bold text-gray-700 leading-tight\">Tell me about yourself</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex items-center md:w-64\">
\t\t\t\t\t\t\t<div class=\"w-full bg-white rounded-full mr-2\">
\t\t\t\t\t\t\t\t<div class=\"rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white\" :style=\"'width: '+ parseInt(step / 3 * 100) +'%'\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-xs w-10 text-gray-600\" x-text=\"parseInt(step / 3 * 100) +'%'\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /Top Navigation -->

\t\t\t\t<!-- Step Content -->
\t\t\t\t<div class=\"py-10\">\t
                     <form id=\"register-form\" role=\"form\" method=\"post\" accept-char=\"UTF-8\" autocomplete=\"off\" data-parsley-validate>
                    {{ form_start(registrationForm) }}
\t\t\t\t\t<div x-show.transition.in=\"step === 1\">

                      <div class=\"mb-5 text-center\">
\t\t\t\t\t\t\t<div class=\"mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset\">
\t\t\t\t\t\t\t\t<img id=\"image\" class=\"object-cover w-full h-32 rounded-full\" :src=\"image\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<label 
\t\t\t\t\t\t\t\tfor=\"fileInput\"
\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\tclass=\"cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" stroke=\"none\"></rect>
\t\t\t\t\t\t\t\t\t<path d=\"M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2\" />
\t\t\t\t\t\t\t\t\t<circle cx=\"12\" cy=\"13\" r=\"3\" />
\t\t\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t\t\tChoisissez une photo
\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t<div class=\"mx-auto w-48 text-gray-500 text-xs text-center mt-1\">Cliquer pour ajouter une photo</div>

\t\t\t\t\t\t\t<input name=\"picture\" id=\"fileInput\" accept=\"image/*\" class=\"hidden\" type=\"file\" @change=\"let file = document.getElementById('fileInput').files[0]; 
\t\t\t\t\t\t\t\tvar reader = new FileReader();
\t\t\t\t\t\t\t\treader.onload = (e) => image = e.target.result;
\t\t\t\t\t\t\t\treader.readAsDataURL(file);\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-5\">
\t\t\t\t\t\t\t<label for=\"firstname\" class=\"font-bold mb-1 text-gray-700 block\">Votre prénom</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium\"
\t\t\t\t\t\t\t\tplaceholder=\"Entrez votre prénom\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-5\">

                              <div class=\"custom-input-div\">
                                {{ form_label(registrationForm.email, \"Votre email\", {'label_attr': {
                                   
                                    'class': 'font-bold mb-1 text-gray-700 block'
                                    
                                }})}}
                                {{ form_widget(registrationForm.email, { 'attr': {
                                'class' : 'w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium',
                                'data-parsley-trigger' : \"change\",
                                'data-parsley-error-message' : \"Une adresse mail valide est nécessaire.\"
                                } }) }}
                                <div class='red-text'>{{ form_errors(registrationForm.email)}}
                                </div>
                            </div>
\t\t\t\t\t\t\t{# <label for=\"email\" class=\"font-bold mb-1 text-gray-700 block\">Email</label> #}
\t\t\t\t\t\t\t{# <input type=\"email\"
\t\t\t\t\t\t\t\tclass=\"w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium\"
\t\t\t\t\t\t\t\tplaceholder=\"Enter your email address...\"> 
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div x-show.transition.in=\"step === 2\">

\t\t\t\t\t\t<div class=\"mb-5\">
\t\t\t\t\t\t\t<label for=\"password\" class=\"font-bold mb-1 text-gray-700 block\">Mot de passe</label>
\t\t\t\t\t\t\t<div class=\"text-gray-600 mt-2 mb-4\">
\t\t\t\t\t\t\t\tCrée un mot de passe sécurisé avec les critères si dessous.

\t\t\t\t\t\t\t\t<ul class=\"list-disc text-sm ml-4 mt-2\">
\t\t\t\t\t\t\t\t\t<li>Lettre minuscule</li>
\t\t\t\t\t\t\t\t\t<li>Chiffre</li>
\t\t\t\t\t\t\t\t\t<li>Lettre Majuscule</li>
\t\t\t\t\t\t\t\t\t<li>Caractère spéciaux</li>
\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"relative\">
                                             

\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t:type=\"togglePassword ? 'text' : 'password'\"
\t\t\t\t\t\t\t\t\t@keydown=\"checkPasswordStrength()\"
\t\t\t\t\t\t\t\t\tx-model=\"password\"
\t\t\t\t\t\t\t\t\tclass=\"w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium\"
\t\t\t\t\t\t\t\t\tplaceholder=\"Votre mot de passe sécuriser...\">

\t\t\t\t\t\t\t\t<div class=\"absolute right-0 bottom-0 top-0 px-3 py-3 cursor-pointer\" 
\t\t\t\t\t\t\t\t\t@click=\"togglePassword = !togglePassword\"
\t\t\t\t\t\t\t\t>\t
\t\t\t\t\t\t\t\t\t<svg :class=\"{'hidden': !togglePassword, 'block': togglePassword }\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 fill-current text-gray-500\" viewBox=\"0 0 24 24\"><path d=\"M12 19c.946 0 1.81-.103 2.598-.281l-1.757-1.757C12.568 16.983 12.291 17 12 17c-5.351 0-7.424-3.846-7.926-5 .204-.47.674-1.381 1.508-2.297L4.184 8.305c-1.538 1.667-2.121 3.346-2.132 3.379-.069.205-.069.428 0 .633C2.073 12.383 4.367 19 12 19zM12 5c-1.837 0-3.346.396-4.604.981L3.707 2.293 2.293 3.707l18 18 1.414-1.414-3.319-3.319c2.614-1.951 3.547-4.615 3.561-4.657.069-.205.069-.428 0-.633C21.927 11.617 19.633 5 12 5zM16.972 15.558l-2.28-2.28C14.882 12.888 15 12.459 15 12c0-1.641-1.359-3-3-3-.459 0-.888.118-1.277.309L8.915 7.501C9.796 7.193 10.814 7 12 7c5.351 0 7.424 3.846 7.926 5C19.624 12.692 18.76 14.342 16.972 15.558z\"/></svg>

\t\t\t\t\t\t\t\t\t<svg :class=\"{'hidden': togglePassword, 'block': !togglePassword }\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 fill-current text-gray-500\" viewBox=\"0 0 24 24\"><path d=\"M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z\"/><path d=\"M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z\"/></svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flex items-center mt-4 h-3\">
\t\t\t\t\t\t\t\t<div class=\"w-2/3 flex justify-between h-2\">\t
\t\t\t\t\t\t\t\t\t<div :class=\"{ 'bg-red-400': passwordStrengthText == 'Trop faible' ||  passwordStrengthText == 'Peu sécurisé' || passwordStrengthText == 'Parfait' }\" class=\"h-2 rounded-full mr-1 w-1/3 bg-gray-300\"></div>
\t\t\t\t\t\t\t\t\t<div :class=\"{ 'bg-orange-400': passwordStrengthText == 'Peu sécurisé' || passwordStrengthText == 'Parfait' }\" class=\"h-2 rounded-full mr-1 w-1/3 bg-gray-300\"></div>
\t\t\t\t\t\t\t\t\t<div :class=\"{ 'bg-green-400': passwordStrengthText == 'Parfait' }\" class=\"h-2 rounded-full w-1/3 bg-gray-300\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div x-text=\"passwordStrengthText\" class=\"text-gray-500 font-medium text-sm ml-3 leading-none\"></div>
\t\t\t\t\t\t\t</div>


                            {{ form_widget(registrationForm.password.first, { 'attr': {
                                 'class': 'w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline my-3 text-gray-600 font-medium',
                                'data-parsley-trigger' : \"change\",
                                'data-parsley-minlength' : \"6\",
                                'data-parsley-error-message' : \"Le mot de passe doit contenir au moins 6 caractères.\"
                                } }) }}
                                {{ form_label(registrationForm.password.first, 'Mot de passe')}}
                            <div class='red-text'>{{ form_errors(registrationForm.password.first) }}</div> 


                                {{ form_label(registrationForm.password.second, 'Confirmez votre mot de passe.')}}

                                {{ form_widget(registrationForm.password.second, { 'attr': {
                                'class': 'w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium',
                                'data-parsley-trigger' : \"change\",
                                'data-parsley-equalto' :\"#password\",
                                'data-parsley-error-message' : \"Les mots de passes ne correspondent pas.\"
                                } }) }}
                                    <div class='red-text'>{{ form_errors(registrationForm.password.second)}}</div>
                                <div class=\"checkbox\">

                                {{ form_widget(registrationForm.agreeTerms, { 'attr' :{'oninvalid' : 'alert(\"Vous devez accepter les conditions d\\'utilisation\")'}  }) }}
                                    <label for=\"registration_form_agreeTerms\">J'ai lu et accepte les <a href=\"#!\" target=\"_blank\">Conditions d'utilisation</a></label>
                                    <div class='red-text'>{{ form_errors(registrationForm.agreeTerms) }}</div>
                                </div>




\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div x-show.transition.in=\"step === 3\">
\t\t\t\t\t\t<div class=\"mb-5\">
\t\t\t\t\t\t\t<label for=\"email\" class=\"font-bold mb-1 text-gray-700 block\">Gender</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flex\">
\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\tclass=\"flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm mr-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text-teal-600 mr-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" x-model=\"gender\" value=\"Male\" class=\"form-radio focus:outline-none focus:shadow-outline\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-none text-gray-700\">Male</div>
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\tclass=\"flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm\">
\t\t\t\t\t\t\t\t\t<div class=\"text-teal-600 mr-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" x-model=\"gender\" value=\"Female\" class=\"form-radio focus:outline-none focus:shadow-outline\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-none text-gray-700\">Female</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-5\">
\t\t\t\t\t\t\t<label for=\"profession\" class=\"font-bold mb-1 text-gray-700 block\">Profession</label>
\t\t\t\t\t\t\t<input type=\"profession\"
\t\t\t\t\t\t\t\tclass=\"w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium\"
\t\t\t\t\t\t\t\tplaceholder=\"eg. Web Developer\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- / Step Content -->
\t\t\t</div>
\t\t</div>     
         <button type=\"submit\" class=\"btn btn-primary my-3\">Crée mon compte</button>
            {{ form_end(registrationForm) }}
            <div class=\"links\">
            <a href=\"{{ path('login') }}\">Vous avez déjà un compte? Cliquer ici! </a>
        </div>
    </form>

\t\t<!-- Bottom Navigation -->\t
\t\t<div class=\"fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md\" x-show=\"step != 'complete'\">
\t\t\t<div class=\"max-w-3xl mx-auto px-4\">
\t\t\t\t<div class=\"flex justify-between\">
\t\t\t\t\t<div class=\"w-1/3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\tx-show=\"step > 1\"
\t\t\t\t\t\t\t@click=\"step--\"
\t\t\t\t\t\t\tclass=\"w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border\" 
\t\t\t\t\t\t>Previous</button>
\t\t\t\t\t</div>
\t                <div class=\"w-1/3\">
\t\t\t\t\t\t <a class=\"w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border\"  href=\"{{ path('login') }}\">Déjà Membre? Cliquer ici! </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"w-1/3 text-right\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\tx-show=\"step < 3\"
\t\t\t\t\t\t\t@click=\"step++\"
\t\t\t\t\t\t\tclass=\"w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium\" 
\t\t\t\t\t\t>Next</button>

\t\t\t\t\t\t<button
\t\t\t\t\t\t\t@click=\"step = 'complete'\"
\t\t\t\t\t\t\tx-show=\"step === 3\"
\t\t\t\t\t\t\tclass=\"w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium\" 
\t\t\t\t\t\t>Complete</button>
                        
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->\t
\t</div>
    </div>


{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js\" defer></script>

\t<script>
\t\tfunction appTest() {
\t\t\treturn {
\t\t\t\tstep: 1, 
\t\t\t\tpasswordStrengthText: '',
\t\t\t\ttogglePassword: false,

\t\t\t\timage: 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAAAAAAAD/4QBCRXhpZgAATU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAkAAAAMAAAABAAAAAEABAAEAAAABAAAAAAAAAAAAAP/bAEMACwkJBwkJBwkJCQkLCQkJCQkJCwkLCwwLCwsMDRAMEQ4NDgwSGRIlGh0lHRkfHCkpFiU3NTYaKjI+LSkwGTshE//bAEMBBwgICwkLFQsLFSwdGR0sLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAdoB2gMBIgACEQEDEQH/xAAfAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgv/xAC1EAACAQMDAgQDBQUEBAAAAX0BAgMABBEFEiExQQYTUWEHInEUMoGRoQgjQrHBFVLR8CQzYnKCCQoWFxgZGiUmJygpKjQ1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4eLj5OXm5+jp6vHy8/T19vf4+fr/xAAfAQADAQEBAQEBAQEBAAAAAAAAAQIDBAUGBwgJCgv/xAC1EQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APTmZsnmk3N60N1NJTELub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lJQA7c3rSbm9aSigBdzetG4+tJRQAZPrRuPrSUUALub1/lRub1pKSgBdzUbm9aSigBdzetG5vX+VJSUALub1/lUu5qhqXj1oAG6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooASiiigAooooAKSiigAooo+lACUZoooAKKKSgAo/rRSUALUlRVJz60AObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiikoAKSlooASiiigA+lHpRQaACkoooATmilpPegBP/ANdS5HrUdSfL7UAObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKSiigAooooAKKKKAEooooASij60UAFFFHpQAUmaKPxoAKSlpPWgA/wAmk/pS/Sk47dqADpUvPvUXrUn4H8qAHt1NJSt1NJQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFISFBJIAHUk4FAC0VTlv4EyEBc+3C/nVSS9uX6MEHonX8zQBrEqvLEAe5A/nUTXVqvWVfwyf5VjFmY5Ykn3JP86SmBrG/tB3c/RTTf7QtvST8hWXRQBqi/te+8f8AAc09by0b/loB/vAiseigDeV43+66t9CDTq5/p04+lTJdXMfSQkej/MP1oA2qKoR6gpwJUK/7Scj8utXEkjkG5GDD2P8AMUgH0UUUAFFFJQAUUUUAFFFJQAtJRRQAUlFFABR2oo+lAB1pKKP60AFFFFACUHjNH/66KAEpaSj/APVQAc0/I9KZUufpQA5uppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACimsyopZiAo5JNZlxePLlI8rH0J/ib60AWp72KLKph3/wDHR9TWdLNNMcuxPoOij6Co6KYBRRRQAUUUUAFFFFABRRRQAUUUUAFKruhDIxUjuDikooA0IL/os4/4Gv8AUVfBVgCpBB6Ecg1gVLBcSwH5eUP3lPQ/SgDaoqOKaOZdyH/eB6qfepKQBRRRQAlFFFABSUUUAFFFFABRRSf5NABxR6e1FJQAcUUUnP6UALSf5/GjvRz+FAB06d6KT6UGgA96kyf8mo//ANdP59P1oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACmu6RqzucKvJNKSACScADJJ7Csi6uDO2BkRqflHr7mgBLi5edu4QH5V/qagoopgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFACUUUUAPjkkiYOhwR+RHoa14J0nTI4YffX0NYtPileJ1dDyOoPQj0NAG7SUyKVJkDr36juD6U+kAUhoooAKKKKACij/JpKACj/PNFFABScUelFACUdqP8mj+dABn9KMjij60d+tACf5FH5Uf59qOOlACfhUn40zmn4oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKhuJhDEz/xfdQerGgCpfXGT5CHgf6w+/8AdqhQSSSScknJPqTRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiiigCe2nMEnP+rbhx6e9bHoQevT3zXP1p2M+9DE33k5X/AHf/AK1AF2koNFIAoopKAFpKKPSgApPX0pf8mkoAKKTPP1paAE+lFFIT/ntQAelHAoz0oz/hQAd6T155oooAKk2+wqLPt/8AWqTj1P5GgCZuppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArJvpd8uwH5Y+P+BHrWnK4jjkc/wAKkj69qwiSSSepJJ+ppgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABSUUUAFFFFABRRSUAFFFFABT4pDFIkg/hPPuO4plFAG8CGAYchgCD7HmlqpYy74dp6xnH4HkVapALSUUUAH+NFFJQAc0f5+tHFJQAUUUepoAP/r0nP/1sUH1ozQAUnOaPwo9OlAAcd6T60tJQAHn+lSZPotR/55qTJ/yKAJm6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAKWoPiNE/vtk/RazKt6g2Zgv9xB+Z5qpTAKKKKACiiigAooooAKKKKA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',
\t\t\t\tpassword: '',
\t\t\t\tgender: 'Male',

\t\t\t\tcheckPasswordStrength() {
\t\t\t\t\tvar strongRegex = new RegExp(\"^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\\\$%\\^&\\*])(?=.{8,})\");
\t\t\t\t\tvar mediumRegex = new RegExp(\"^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})\");

\t\t\t\t\tlet value = this.password;

\t\t\t\t\tif (strongRegex.test(value)) {
\t\t\t\t\t\tthis.passwordStrengthText = \"Parfait\";
\t\t\t\t\t} else if(mediumRegex.test(value)) {
\t\t\t\t\t\tthis.passwordStrengthText = \"Peu sécurisé\";
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.passwordStrengthText = \"Trop faible\";
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t</script> #}

{% endblock %}


", "registration/register.html.twig", "/shared/httpd/Projet-Final/templates/registration/register.html.twig");
    }
}
