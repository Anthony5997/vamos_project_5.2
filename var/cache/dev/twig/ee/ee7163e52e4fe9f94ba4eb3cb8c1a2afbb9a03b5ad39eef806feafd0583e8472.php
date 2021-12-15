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

/* user/edit.html.twig */
class __TwigTemplate_564d9db4a8728797de8d48a9587a8e831b0203c9c84338c8efb2199f5508d5a5 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        // line 1
        $context["checkAllPreferences"] = (((((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "discussion", [], "any", false, false, false, 1), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "smoking", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "music", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "animals", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "healthPass", [], "any", false, false, false, 1), null)));
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit User
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container-profile\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 mt-4 welcome-profile align-items-center\">
            <h2 class=\"mx-auto text-center\">Bienvenue ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "firstName", [], "any", false, false, false, 11), "html", null, true);
        echo " !</h2>
            <p>
                Depuis votre espace membre, vous pouvrez remplir des informations vous concernant et utile à la communauté. Vous retrouverez ici l'historique de vos trajets ainsi que vos informations personnelles.
            </p>
            <p>Pour commencer où mettre à jour l'avancée d'un trajet, rendez-vous dans l'onglet \"<span class=\"bold-yellow\">Mes trajets</span>\"</p>
            <p> Les informations du résumé seront visible par les autres utilisateurs, n'oublier pas de les remplirs depuis les onglets
                    \"<span class=\"bold-yellow\">Mes préférences de voyage</span>\", 
                    \"<span class=\"bold-yellow\">Mon véhicule</span>\" et 
                    \"<span class=\"bold-yellow\">Informations personnelles</span>\" !
            </p>
            <p><span class=\"bold-yellow\">Bonne route !</span></p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-3 d-flex justify-content-center\">
            <ul class=\"nav nav-tabs d-flex flex-column\" role=\"tablist\">
                <li class=\"nav-item-test\">
                    <a class=\"nav-link-test  tab-custom-test active\" data-toggle=\"tab\" href=\"#tabs-1\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                                <i class=\"far fa-id-badge d-flex align-items-center\"></i> 
                                <p>Résumé</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test \" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-info d-flex align-items-center\"></i> 
                            <p>Informations personnelles</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-suitcase-rolling d-flex align-items-center\"></i> 
                            <p>Préférences de Voyage</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-4\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-car d-flex align-items-center\"></i> 
                            <p>Mon Véhicule</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                                <i class=\"fas fa-route d-flex align-items-center\"></i> 
                                <p>Mes trajets</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-6\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-user-circle d-flex align-items-center\"></i> 
                            <p>Mon compte</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"col-9\">
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 79
            echo "                <div class=\"alert alert-success text-white\">
                    ";
            // line 80
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            echo "                <div class=\"alert alert-error text-white\">
                    ";
            // line 85
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            <div class=\"tab-content\">
                <div class=\"tab-pane active section-padding\" id=\"tabs-1\" role=\"tabpanel\">
                    <div class=\"mx-auto form-info\">
                        <div class=\"main-info-profile\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                    <p class=\"\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "firstName", [], "any", false, false, false, 94), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "userExperience", [], "any", false, false, false, 95), "experienceLevel", [], "any", false, false, false, 95), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        Trajets effectué</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        <strong>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "tripsMade", [], "any", false, false, false, 99), "html", null, true);
        echo "</strong>
                                    </p>
                                </div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\"></div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                    ";
        // line 104
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "profile_picture", [], "any", false, false, false, 104), ""))) {
            // line 105
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "profile_picture", [], "any", false, false, false, 106)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "profile_picture", [], "any", false, false, false, 106)), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        } else {
            // line 109
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        }
        // line 113
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"main-info-profile\">
                            <div class=\"d-flex justify-content-center\">
                                <span class=\"profile-separator\"></div>
                            </div>

                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Mes préférences de voyage</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    <div class=\"form-info mx-auto col-xs-12 col-sm-10 col-md-9\">
                                    ";
        // line 134
        if ((0 === twig_compare((isset($context["checkAllPreferences"]) || array_key_exists("checkAllPreferences", $context) ? $context["checkAllPreferences"] : (function () { throw new RuntimeError('Variable "checkAllPreferences" does not exist.', 134, $this->source); })()), false))) {
            // line 135
            echo "                                     <p>Veuillez renseigner vos préférences pour les consulters et les rendre visibles.</p>
                                    ";
        } else {
            // line 137
            echo "                                        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 137, $this->source); })()), "travelPreferences", [], "any", false, false, false, 137), "discussion", [], "any", false, false, false, 137), null))) {
                // line 138
                echo "                                            <h6>
                                                Discussion :
                                            </h6>
                                            <p class=\"custom-field-form\">";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "travelPreferences", [], "any", false, false, false, 141), "discussion", [], "any", false, false, false, 141), "html", null, true);
                echo "</p>
                                        ";
            }
            // line 143
            echo "                                        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "travelPreferences", [], "any", false, false, false, 143), "smoking", [], "any", false, false, false, 143), null))) {
                // line 144
                echo "                                            <h6>
                                                Fumeur :
                                            </h6>
                                            <p class=\"custom-field-form\">";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "travelPreferences", [], "any", false, false, false, 147), "smoking", [], "any", false, false, false, 147), "html", null, true);
                echo "</p>
                                        ";
            }
            // line 149
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "travelPreferences", [], "any", false, false, false, 149), "music", [], "any", false, false, false, 149), null))) {
                // line 150
                echo "                                            <h6>
                                                Musique :
                                            </h6>
                                            <p class=\"custom-field-form\">";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "travelPreferences", [], "any", false, false, false, 153), "music", [], "any", false, false, false, 153), "html", null, true);
                echo "</p>
                                        ";
            }
            // line 155
            echo "                                        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "travelPreferences", [], "any", false, false, false, 155), "animals", [], "any", false, false, false, 155), null))) {
                // line 156
                echo "                                            <h6>
                                                Animaux :
                                            </h6>
                                            <p class=\"custom-field-form\">";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 159, $this->source); })()), "travelPreferences", [], "any", false, false, false, 159), "animals", [], "any", false, false, false, 159), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 161
            echo "                                        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "travelPreferences", [], "any", false, false, false, 161), "healthPass", [], "any", false, false, false, 161), null))) {
                // line 162
                echo "                                            <h6>
                                                Pass Sanitaire :
                                            </h6>
                                            <p class=\"custom-field-form\">";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 165, $this->source); })()), "travelPreferences", [], "any", false, false, false, 165), "healthPass", [], "any", false, false, false, 165), "html", null, true);
                echo "</p>
                                        ";
            }
            // line 167
            echo "                                    ";
        }
        // line 168
        echo "                                    </div>
                                </div>
                            </label>
                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Mon véhicule</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    <div class=\"row mx-auto form-info\">
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                            <p class=\"vehicule-profile\">Marque :
                                                ";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "vehicule", [], "any", false, false, false, 186), "brand", [], "any", false, false, false, 186), "html", null, true);
        echo "</p>
                                            <p class=\"vehicule-profile\">Modèle :
                                                ";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 188, $this->source); })()), "vehicule", [], "any", false, false, false, 188), "model", [], "any", false, false, false, 188), "html", null, true);
        echo "</p>
                                            <p class=\"vehicule-profile\">Couleur :
                                                ";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "vehicule", [], "any", false, false, false, 190), "color", [], "any", false, false, false, 190), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex justify-content-center\">
                                           <img class=\"profile-picture-profile\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "vehicule", [], "any", false, false, false, 193), "vehiculePicture", [], "any", false, false, false, 193))), "html", null, true);
        echo "\"/>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <div class=\"row justify-content-around mt-4\">
                                <div class=\"col-6\">
                                    <div class=\"card-profile\"> 
                                        <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201)]), "html", null, true);
        echo "\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-envelope\"></i>
                                                <p>Boite de récéption</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"card-profile\">
                                        <a href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211), "id", [], "any", false, false, false, 211)]), "html", null, true);
        echo "\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-star\"></i>
                                                <p>Vos avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                        <div>
                            ";
        // line 224
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                        ";
        // line 228
        echo twig_include($this->env, $context, "travel_preferences/_form.html.twig");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                        ";
        // line 231
        echo twig_include($this->env, $context, "vehicule/_form.html.twig");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                        <div class=\"row justify-content-center \">
                            <div class=\" form-info\">
                                <h3 class=\"col d-flex justify-content-center\">Historique de mes trajets</h3>
                                <div class=\"row justify-content-around\">
                                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 239, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 240
            echo "                                        ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 240), 3))) {
                // line 241
                echo "                                            <div class=\"col-12 col-sm-4 my-2\">
                                                <div class=\"card-profile-last-trip\"> 
                                                    <div class=\"card-profile-content\">
                                                        <div class=\"col trip-profile-card\">
                                                            <div class=\"col d-flex justify-content-center\">
                                                            <p>";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 246), "html", null, true);
                echo " -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 246), "html", null, true);
                echo "</p>
                                                            </div>
                                                            <div class=\"col d-flex justify-content-center my-2\"><p>";
                // line 248
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 248), "d M"), "html", null, true);
                echo "</p></div>
                                                            <div class=\"col d-flex  justify-content-center align-items-center my-2\">
                                                                <a href=\"";
                // line 250
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 250)]), "html", null, true);
                echo "\" class=\"btn\">
                                                                    <i class=\"far fa-eye\"></i>
                                                                </a>
                                                            </div>
                                                            ";
                // line 254
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 254), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 254), true)))) {
                    // line 255
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a href=\"";
                    // line 256
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 256)]), "html", null, true);
                    echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                                </div>
                                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 258
$context["trip"], "tripCompleted", [], "any", false, false, false, 258), true))) {
                    // line 259
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                                </div>
                                                            ";
                } else {
                    // line 263
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                                    <a href=\"";
                    // line 265
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 265)]), "html", null, true);
                    echo "\" class=\"btn btn-info\">Terminer le trajet</a>
                                                                </div>
                                                            ";
                }
                // line 268
                echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 273
            echo "                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                                </div>
                        <label class=\"accordion-wrapper\">
                            <input type=\"checkbox\" class=\"accordion\" hidden/>
                            <div class=\"title\">
                                <strong>Tous mes trajets</strong>
                                <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                    <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                </svg>
                                <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                    <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                </svg>
                            </div>
                            <div class=\"content\">
                                <div class=\"col-12 pt-3\">
                                    <div class=\"row\">
                                        <div class=\"col d-flex justify-content-center\">Trajet</div>
                                        <div class=\"col d-flex justify-content-around\">Date</div>
                                        <div class=\"col d-flex justify-content-center\">Status</div>
                                        <div class=\"col d-flex justify-content-center\">Détails</div>
                                    </div>
                                    ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 294, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 295
            echo "                                    ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 295), 2))) {
                // line 296
                echo "                                        <div class=\"row mt-4 line-trip-profile\">
                                            <div class=\"col d-flex justify-content-center\">";
                // line 297
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 297), "html", null, true);
                echo "
                                                ->
                                                ";
                // line 299
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 299), "html", null, true);
                echo "</div>
                                            <div class=\"col d-flex justify-content-center\">";
                // line 300
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 300), "d M"), "html", null, true);
                echo "</div>
                                            ";
                // line 301
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 301), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 301), true)))) {
                    // line 302
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a href=\"";
                    // line 303
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 303)]), "html", null, true);
                    echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                </div>
                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 305
$context["trip"], "tripCompleted", [], "any", false, false, false, 305), true))) {
                    // line 306
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                </div>
                                            ";
                } else {
                    // line 310
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                    <a href=\"";
                    // line 312
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 312)]), "html", null, true);
                    echo "\" class=\"btn btn-info\">Terminer le trajet</a>
                                                </div>
                                            ";
                }
                // line 315
                echo "                                            <div class=\"col d-flex  justify-content-center align-items-center\">
                                                <a href=\"";
                // line 316
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 316)]), "html", null, true);
                echo "\" class=\"btn\">
                                                    <i class=\"far fa-eye\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        ";
            }
            // line 322
            echo "                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "                                </div>
                            </div>
                        </label>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                            <div class=\"row justify-content-center \">
                                <div class=\" form-info\">
                                    <h4 class=\"text-center\">Modifier mon mot de passe</h4>
                                    <div class=\"col-12\">
                                        ";
        // line 336
        echo twig_include($this->env, $context, "user/_form-reset.html.twig");
        echo "
                                        <a href=\"";
        // line 337
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"btn btn-danger mb-4\">
                                            <i class=\"fas fa-sign-out-alt\"></i>
                                            Me déconnecter</a>
                                        ";
        // line 340
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 340,  674 => 337,  670 => 336,  655 => 323,  641 => 322,  632 => 316,  629 => 315,  623 => 312,  619 => 310,  613 => 306,  611 => 305,  606 => 303,  603 => 302,  601 => 301,  597 => 300,  593 => 299,  588 => 297,  585 => 296,  582 => 295,  565 => 294,  543 => 274,  529 => 273,  522 => 268,  516 => 265,  512 => 263,  506 => 259,  504 => 258,  499 => 256,  496 => 255,  494 => 254,  487 => 250,  482 => 248,  475 => 246,  468 => 241,  465 => 240,  448 => 239,  437 => 231,  431 => 228,  424 => 224,  408 => 211,  395 => 201,  384 => 193,  378 => 190,  373 => 188,  368 => 186,  348 => 168,  345 => 167,  340 => 165,  335 => 162,  332 => 161,  327 => 159,  322 => 156,  319 => 155,  314 => 153,  309 => 150,  306 => 149,  301 => 147,  296 => 144,  293 => 143,  288 => 141,  283 => 138,  280 => 137,  276 => 135,  274 => 134,  251 => 113,  243 => 110,  240 => 109,  232 => 106,  229 => 105,  227 => 104,  219 => 99,  212 => 95,  208 => 94,  200 => 88,  191 => 85,  188 => 84,  183 => 83,  174 => 80,  171 => 79,  167 => 78,  97 => 11,  92 => 8,  82 => 7,  62 => 4,  51 => 2,  49 => 1,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% set checkAllPreferences = (user.travelPreferences.discussion != null) and (user.travelPreferences.smoking != null) and (user.travelPreferences.music != null) and (user.travelPreferences.animals != null) and (user.travelPreferences.healthPass != null) %}
{% extends 'base.html.twig' %}

{% block title %}Edit User
{% endblock %}

{% block body %}
<div class=\"container-profile\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 mt-4 welcome-profile align-items-center\">
            <h2 class=\"mx-auto text-center\">Bienvenue {{user.firstName}} !</h2>
            <p>
                Depuis votre espace membre, vous pouvrez remplir des informations vous concernant et utile à la communauté. Vous retrouverez ici l'historique de vos trajets ainsi que vos informations personnelles.
            </p>
            <p>Pour commencer où mettre à jour l'avancée d'un trajet, rendez-vous dans l'onglet \"<span class=\"bold-yellow\">Mes trajets</span>\"</p>
            <p> Les informations du résumé seront visible par les autres utilisateurs, n'oublier pas de les remplirs depuis les onglets
                    \"<span class=\"bold-yellow\">Mes préférences de voyage</span>\", 
                    \"<span class=\"bold-yellow\">Mon véhicule</span>\" et 
                    \"<span class=\"bold-yellow\">Informations personnelles</span>\" !
            </p>
            <p><span class=\"bold-yellow\">Bonne route !</span></p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-3 d-flex justify-content-center\">
            <ul class=\"nav nav-tabs d-flex flex-column\" role=\"tablist\">
                <li class=\"nav-item-test\">
                    <a class=\"nav-link-test  tab-custom-test active\" data-toggle=\"tab\" href=\"#tabs-1\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                                <i class=\"far fa-id-badge d-flex align-items-center\"></i> 
                                <p>Résumé</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test \" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-info d-flex align-items-center\"></i> 
                            <p>Informations personnelles</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-suitcase-rolling d-flex align-items-center\"></i> 
                            <p>Préférences de Voyage</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-4\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-car d-flex align-items-center\"></i> 
                            <p>Mon Véhicule</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                                <i class=\"fas fa-route d-flex align-items-center\"></i> 
                                <p>Mes trajets</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-6\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-user-circle d-flex align-items-center\"></i> 
                            <p>Mon compte</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"col-9\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success text-white\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-error text-white\">
                    {{ message }}
                </div>
            {% endfor %}
            <div class=\"tab-content\">
                <div class=\"tab-pane active section-padding\" id=\"tabs-1\" role=\"tabpanel\">
                    <div class=\"mx-auto form-info\">
                        <div class=\"main-info-profile\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                    <p class=\"\">{{ user.firstName }}</p>
                                    <p class=\"experience-profile\">{{ user.userExperience.experienceLevel }}</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        Trajets effectué</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        <strong>{{ user.tripsMade }}</strong>
                                    </p>
                                </div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\"></div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                    {% if user.profile_picture != '' %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{ asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{ asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\"/></a>
                                        </div>
                                    {% else %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{ asset ('/assets/uploads/profilePicture/default_profile_picture.jpg') }}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{ asset ('/assets/uploads/profilePicture/default_profile_picture.jpg') }}\"/></a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"main-info-profile\">
                            <div class=\"d-flex justify-content-center\">
                                <span class=\"profile-separator\"></div>
                            </div>

                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Mes préférences de voyage</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    <div class=\"form-info mx-auto col-xs-12 col-sm-10 col-md-9\">
                                    {% if checkAllPreferences == false %}
                                     <p>Veuillez renseigner vos préférences pour les consulters et les rendre visibles.</p>
                                    {% else %}
                                        {% if user.travelPreferences.discussion != null %}
                                            <h6>
                                                Discussion :
                                            </h6>
                                            <p class=\"custom-field-form\">{{ user.travelPreferences.discussion }}</p>
                                        {% endif %}
                                        {% if user.travelPreferences.smoking != null %}
                                            <h6>
                                                Fumeur :
                                            </h6>
                                            <p class=\"custom-field-form\">{{ user.travelPreferences.smoking }}</p>
                                        {% endif %}
                                            {% if user.travelPreferences.music != null %}
                                            <h6>
                                                Musique :
                                            </h6>
                                            <p class=\"custom-field-form\">{{ user.travelPreferences.music }}</p>
                                        {% endif %}
                                        {% if user.travelPreferences.animals != null %}
                                            <h6>
                                                Animaux :
                                            </h6>
                                            <p class=\"custom-field-form\">{{ user.travelPreferences.animals }}</p>
                                            {% endif %}
                                        {% if user.travelPreferences.healthPass != null %}
                                            <h6>
                                                Pass Sanitaire :
                                            </h6>
                                            <p class=\"custom-field-form\">{{ user.travelPreferences.healthPass }}</p>
                                        {% endif %}
                                    {% endif %}
                                    </div>
                                </div>
                            </label>
                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Mon véhicule</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    <div class=\"row mx-auto form-info\">
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                            <p class=\"vehicule-profile\">Marque :
                                                {{ user.vehicule.brand }}</p>
                                            <p class=\"vehicule-profile\">Modèle :
                                                {{ user.vehicule.model }}</p>
                                            <p class=\"vehicule-profile\">Couleur :
                                                {{ user.vehicule.color }}</p>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex justify-content-center\">
                                           <img class=\"profile-picture-profile\" src=\"{{ asset ('/assets/uploads/vehiculePicture/' ~ user.vehicule.vehiculePicture ) }}\"/>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <div class=\"row justify-content-around mt-4\">
                                <div class=\"col-6\">
                                    <div class=\"card-profile\"> 
                                        <a href=\"{{ path ('message_discussion', {'id': user.id})}}\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-envelope\"></i>
                                                <p>Boite de récéption</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"card-profile\">
                                        <a href=\"{{ path ('review_show', {'id': app.user.id})}}\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-star\"></i>
                                                <p>Vos avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                        <div>
                            {{ include('user/_form.html.twig') }}
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                        {{ include('travel_preferences/_form.html.twig') }}
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                        {{ include('vehicule/_form.html.twig') }}
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                        <div class=\"row justify-content-center \">
                            <div class=\" form-info\">
                                <h3 class=\"col d-flex justify-content-center\">Historique de mes trajets</h3>
                                <div class=\"row justify-content-around\">
                                    {% for trip in trips %}
                                        {% if loop.index0 < 3 %}
                                            <div class=\"col-12 col-sm-4 my-2\">
                                                <div class=\"card-profile-last-trip\"> 
                                                    <div class=\"card-profile-content\">
                                                        <div class=\"col trip-profile-card\">
                                                            <div class=\"col d-flex justify-content-center\">
                                                            <p>{{ trip.departure }} -> {{ trip.arrival }}</p>
                                                            </div>
                                                            <div class=\"col d-flex justify-content-center my-2\"><p>{{ trip.dateOfTrip|date(\"d M\") }}</p></div>
                                                            <div class=\"col d-flex  justify-content-center align-items-center my-2\">
                                                                <a href=\"{{ path ('trip_details', {'id': trip.id}) }}\" class=\"btn\">
                                                                    <i class=\"far fa-eye\"></i>
                                                                </a>
                                                            </div>
                                                            {% if trip.tripStarted != true and trip.tripCompleted != true %}
                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a href=\"{{ path ('trip_start', {'id': trip.id}) }}\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                                </div>
                                                            {% elseif trip.tripCompleted == true %}
                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                                </div>
                                                            {% else %}
                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                                    <a href=\"{{ path ('trip_finish', {'id': trip.id}) }}\" class=\"btn btn-info\">Terminer le trajet</a>
                                                                </div>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                        <label class=\"accordion-wrapper\">
                            <input type=\"checkbox\" class=\"accordion\" hidden/>
                            <div class=\"title\">
                                <strong>Tous mes trajets</strong>
                                <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                    <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                </svg>
                                <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                    <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                </svg>
                            </div>
                            <div class=\"content\">
                                <div class=\"col-12 pt-3\">
                                    <div class=\"row\">
                                        <div class=\"col d-flex justify-content-center\">Trajet</div>
                                        <div class=\"col d-flex justify-content-around\">Date</div>
                                        <div class=\"col d-flex justify-content-center\">Status</div>
                                        <div class=\"col d-flex justify-content-center\">Détails</div>
                                    </div>
                                    {% for trip in trips %}
                                    {% if loop.index0 > 2 %}
                                        <div class=\"row mt-4 line-trip-profile\">
                                            <div class=\"col d-flex justify-content-center\">{{ trip.departure }}
                                                ->
                                                {{ trip.arrival }}</div>
                                            <div class=\"col d-flex justify-content-center\">{{ trip.dateOfTrip|date(\"d M\") }}</div>
                                            {% if trip.tripStarted != true and trip.tripCompleted != true %}
                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a href=\"{{ path ('trip_start', {'id': trip.id}) }}\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                </div>
                                            {% elseif trip.tripCompleted == true %}
                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                </div>
                                            {% else %}
                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                    <a href=\"{{ path ('trip_finish', {'id': trip.id}) }}\" class=\"btn btn-info\">Terminer le trajet</a>
                                                </div>
                                            {% endif %}
                                            <div class=\"col d-flex  justify-content-center align-items-center\">
                                                <a href=\"{{ path ('trip_details', {'id': trip.id}) }}\" class=\"btn\">
                                                    <i class=\"far fa-eye\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                        </label>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                            <div class=\"row justify-content-center \">
                                <div class=\" form-info\">
                                    <h4 class=\"text-center\">Modifier mon mot de passe</h4>
                                    <div class=\"col-12\">
                                        {{ include('user/_form-reset.html.twig') }}
                                        <a href=\"{{ path ('logout') }}\" class=\"btn btn-danger mb-4\">
                                            <i class=\"fas fa-sign-out-alt\"></i>
                                            Me déconnecter</a>
                                        {{ include('user/_delete_form.html.twig') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {% endblock %}", "user/edit.html.twig", "/shared/httpd/Projet-Final/templates/user/edit.html.twig");
    }
}
