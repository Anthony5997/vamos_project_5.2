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

/* message/discussions.html.twig */
class __TwigTemplate_874a1360df4147ca09d52e29db94682bb5dae706d94883158b0e673da71f54be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/discussions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/discussions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/discussions.html.twig", 1);
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

        echo "Message";
        
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
        echo "<div class=\"clear-section\">
    <h1 class=\"p-3 my-3 text-center\">Boite de réception</h1>
    ";
        // line 8
        if ((0 === twig_compare((isset($context["messageReceive"]) || array_key_exists("messageReceive", $context) ? $context["messageReceive"] : (function () { throw new RuntimeError('Variable "messageReceive" does not exist.', 8, $this->source); })()), null))) {
            // line 9
            echo "        <p class=\"text-center\">Aucun message reçu pour l'instant</p>
        <div class=\"row d-flex justify-content-center\">
            <img class=\"robot-sleeping-img\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/robot-sleeping.png"), "html", null, true);
            echo "\">
        </div>
    ";
        } else {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messageReceive"]) || array_key_exists("messageReceive", $context) ? $context["messageReceive"] : (function () { throw new RuntimeError('Variable "messageReceive" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "            <div class=\"row card-receiver-message\">
                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\">
                <div class=\"row\">
                    <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                        <p class=\"font-control\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 19), "firstName", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
                        <img class=\"img-card\"src=\"";
                // line 20
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 20), "profile_picture", [], "any", false, false, false, 20)), "html", null, true);
                echo "\"/>
                    </div>
                    <div class=\"col d-flex  flex-column justify-content-center\">
                    <span class=\"d-inline-block message-font-control text-truncate\" style=\"max-width: 150px;\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 24), "html", null, true);
                echo "
                    </span>
                    </div>
                    <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right message-font-control\"></div>
                </div>
                <span class=\"d-inline-block message-font-control d-flex justify-content-between\">
                    <div></div>
                    <div>  ";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 31), "d M H i"), "html", null, true);
                echo " </div>
                    </span>
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
        }
        // line 37
        echo "</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "message/discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 37,  150 => 36,  139 => 31,  129 => 24,  122 => 20,  118 => 19,  112 => 16,  109 => 15,  104 => 14,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Message{% endblock %}

{% block body %}
<div class=\"clear-section\">
    <h1 class=\"p-3 my-3 text-center\">Boite de réception</h1>
    {% if messageReceive == null %}
        <p class=\"text-center\">Aucun message reçu pour l'instant</p>
        <div class=\"row d-flex justify-content-center\">
            <img class=\"robot-sleeping-img\" src=\"{{asset('assets/uploads/custom-pic/robot-sleeping.png')}}\">
        </div>
    {% else %}
        {% for message in messageReceive %}
            <div class=\"row card-receiver-message\">
                <a href=\"{{path('message_discussion_details', {'id': message.sender.id})}}\">
                <div class=\"row\">
                    <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                        <p class=\"font-control\">{{message.sender.firstName}}</p>
                        <img class=\"img-card\"src=\"{{asset('assets/uploads/profilePicture/') ~ message.sender.profile_picture}}\"/>
                    </div>
                    <div class=\"col d-flex  flex-column justify-content-center\">
                    <span class=\"d-inline-block message-font-control text-truncate\" style=\"max-width: 150px;\">
                        {{message.content}}
                    </span>
                    </div>
                    <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right message-font-control\"></div>
                </div>
                <span class=\"d-inline-block message-font-control d-flex justify-content-between\">
                    <div></div>
                    <div>  {{message.sendAt|date('d M H i')}} </div>
                    </span>
                </a>
            </div>
        {% endfor %}
    {% endif %}
</div>


{% endblock %}
", "message/discussions.html.twig", "/shared/httpd/Projet-Final/templates/message/discussions.html.twig");
    }
}
