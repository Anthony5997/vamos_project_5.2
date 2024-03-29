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

/* vehicule/_form.html.twig */
class __TwigTemplate_35d2c1671031fcae1aab9081e27c6080cede350d722801aa9a8fe0e4a390867a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_form.html.twig"));

        // line 1
        echo " <section class=\"section-padding\">
    <div class=\"row justify-content-center \">
        <div class=\"col-10 form-info\">
        <p class=\"\"><i style=\"color: #F99C25;padding:5px;\"class=\"fas fa-circle\"></i>Informations de votre véhicule :</p>
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
                    <div class=\"custom-input-div\">
                        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 7, $this->source); })()), "country_of_registration", [], "any", false, false, false, 7), 'label', ["label" => "Pays d'immatriculation"]);
        echo "
                        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 8, $this->source); })()), "country_of_registration", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => " Pays"]]);
        echo "
                    </div> 
                    <div class='red-text'>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 10, $this->source); })()), "country_of_registration", [], "any", false, false, false, 10), 'errors');
        echo "</div>
                    <div class=\"custom-input-div\">
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 12, $this->source); })()), "numberplate", [], "any", false, false, false, 12), 'label', ["label" => "Plaque d'immatriculation"]);
        echo "
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 13, $this->source); })()), "numberplate", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "XX-123-XX"]]);
        echo "
                    </div>
                    <div class='red-text'>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 15, $this->source); })()), "numberplate", [], "any", false, false, false, 15), 'errors');
        echo "</div>
                    <div class=\"custom-input-div\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 17, $this->source); })()), "brand", [], "any", false, false, false, 17), 'label', ["label" => "Marque"]);
        echo " 
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 18, $this->source); })()), "brand", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => " Exemple : Opel"]]);
        echo "
                    </div> 
                    <div class='red-text'>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 20, $this->source); })()), "brand", [], "any", false, false, false, 20), 'errors');
        echo "</div>
                        <div class=\"custom-input-div\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 22, $this->source); })()), "model", [], "any", false, false, false, 22), 'label', ["label" => "Modèle"]);
        echo " 
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 23, $this->source); })()), "model", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => " Exemple : Corsa"]]);
        echo "
                    </div> 
                    <div class='red-text'>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 25, $this->source); })()), "model", [], "any", false, false, false, 25), 'errors');
        echo "</div>
                        <div class=\"custom-input-div\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 27, $this->source); })()), "color", [], "any", false, false, false, 27), 'label', ["label" => "Couleur"]);
        echo " 
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 28, $this->source); })()), "color", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => " Sélectionnée une couleur"]]);
        echo "
                    </div> 
                    <div class='red-text'>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 30, $this->source); })()), "color", [], "any", false, false, false, 30), 'errors');
        echo "</div>
                    <div class=\"custom-input-div\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 32, $this->source); })()), "year", [], "any", false, false, false, 32), 'label', ["label" => "Année"]);
        echo " 
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 33, $this->source); })()), "year", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => " Année"]]);
        echo "
                    </div> 
                    <div class='red-text'>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 35, $this->source); })()), "year", [], "any", false, false, false, 35), 'errors');
        echo "</div>
                        <div class=\"custom-input-div\">
                        <div class=\"input-field\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 38, $this->source); })()), "typeOfVehicule", [], "any", false, false, false, 38), 'label', ["label" => "Type de véhicule"]);
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 39, $this->source); })()), "typeOfVehicule", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                        </div>
                        <div class='red-text'>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 41, $this->source); })()), "typeOfVehicule", [], "any", false, false, false, 41), 'errors');
        echo "</div>
                    </div>
                        <div class='red-text'>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 43, $this->source); })()), "vehicule_picture", [], "any", false, false, false, 43), 'errors');
        echo "</div>
                            <div class=\"custom-file fileUpload\" id='btnHeigt'>
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 45, $this->source); })()), "vehicule_picture", [], "any", false, false, false, 45), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "custom-field-form upload"]]);
        // line 51
        echo "
                                <span>Ajouter une photo de mon véhicule</span>
                            </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-center\">
                    <button  type='submit' class=\"col-md-10 button-update-profile\">Sauvegarder mon véhicule</button>
                </div>
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

</section> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  160 => 51,  158 => 45,  153 => 43,  148 => 41,  143 => 39,  139 => 38,  133 => 35,  128 => 33,  124 => 32,  119 => 30,  114 => 28,  110 => 27,  105 => 25,  100 => 23,  96 => 22,  91 => 20,  86 => 18,  82 => 17,  77 => 15,  72 => 13,  68 => 12,  63 => 10,  58 => 8,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
    <div class=\"row justify-content-center \">
        <div class=\"col-10 form-info\">
        <p class=\"\"><i style=\"color: #F99C25;padding:5px;\"class=\"fas fa-circle\"></i>Informations de votre véhicule :</p>
            {{ form_start(vehicule) }}
                    <div class=\"custom-input-div\">
                        {{ form_label(vehicule.country_of_registration, 'Pays d\\'immatriculation') }}
                        {{ form_widget(vehicule.country_of_registration, {'attr': {'class': 'custom-field-form','placeholder': ' Pays'}}) }}
                    </div> 
                    <div class='red-text'>{{ form_errors(vehicule.country_of_registration)}}</div>
                    <div class=\"custom-input-div\">
                        {{ form_label(vehicule.numberplate, 'Plaque d\\'immatriculation') }}
                        {{ form_widget(vehicule.numberplate, {'attr': {'class': 'custom-field-form','placeholder': 'XX-123-XX'}}) }}
                    </div>
                    <div class='red-text'>{{ form_errors(vehicule.numberplate)}}</div>
                    <div class=\"custom-input-div\">
                        {{ form_label(vehicule.brand,'Marque') }} 
                        {{ form_widget(vehicule.brand, {'attr': {'class': 'custom-field-form','placeholder': ' Exemple : Opel'}}) }}
                    </div> 
                    <div class='red-text'>{{ form_errors(vehicule.brand)}}</div>
                        <div class=\"custom-input-div\">
                        {{ form_label(vehicule.model,'Modèle') }} 
                        {{ form_widget(vehicule.model, {'attr': {'class': 'custom-field-form','placeholder': ' Exemple : Corsa'}}) }}
                    </div> 
                    <div class='red-text'>{{ form_errors(vehicule.model)}}</div>
                        <div class=\"custom-input-div\">
                        {{ form_label(vehicule.color,'Couleur') }} 
                        {{ form_widget(vehicule.color, {'attr': {'class': 'custom-field-form','placeholder': ' Sélectionnée une couleur'}}) }}
                    </div> 
                    <div class='red-text'>{{ form_errors(vehicule.color)}}</div>
                    <div class=\"custom-input-div\">
                        {{ form_label(vehicule.year,'Année') }} 
                        {{ form_widget(vehicule.year, {'attr': {'class': 'custom-field-form','placeholder': ' Année'}}) }}
                    </div> 
                    <div class='red-text'>{{ form_errors(vehicule.year)}}</div>
                        <div class=\"custom-input-div\">
                        <div class=\"input-field\">
                            {{ form_label(vehicule.typeOfVehicule, 'Type de véhicule') }}
                            {{ form_widget(vehicule.typeOfVehicule, {'attr': {'class': 'custom-field-form'}}) }}
                        </div>
                        <div class='red-text'>{{ form_errors(vehicule.typeOfVehicule)}}</div>
                    </div>
                        <div class='red-text'>{{ form_errors(vehicule.vehicule_picture)}}</div>
                            <div class=\"custom-file fileUpload\" id='btnHeigt'>
                                {{ form_widget(vehicule.vehicule_picture, { 'attr': {
                                    'accept' : '.pdf,.jpg,.doc,.docx,.png,.gif',
                                    'size' : '20000000', 
                                    'type' : 'file',
                                    'class': 'custom-field-form upload'
                                    }}) 
                                }}
                                <span>Ajouter une photo de mon véhicule</span>
                            </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-center\">
                    <button  type='submit' class=\"col-md-10 button-update-profile\">Sauvegarder mon véhicule</button>
                </div>
            {{ form_end(vehicule) }}
        </div>
    </div>

</section> ", "vehicule/_form.html.twig", "/shared/httpd/Projet-Final/templates/vehicule/_form.html.twig");
    }
}
