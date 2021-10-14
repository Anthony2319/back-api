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

/* @EasyAdmin/includes/_encore_script_tags.html.twig */
class __TwigTemplate_10109a49508ec0838b2ea6fc0e55f654e183632d0dc35906513debc93c44e34a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_encore_script_tags.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) || array_key_exists("assets", $context) ? $context["assets"] : (function () { throw new RuntimeError('Variable "assets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["encore_asset"]) {
            // line 3
            echo "    ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_script_tags", twig_get_attribute($this->env, $this->source, $context["encore_asset"], "value", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, $context["encore_asset"], "webpackPackageName", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, $context["encore_asset"], "webpackEntrypointName", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, $context["encore_asset"], "htmlAttributes", [], "any", false, false, false, 3));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encore_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/includes/_encore_script_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var assets \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto[] #}
{% for encore_asset in assets %}
    {{ ea_call_function_if_exists('encore_entry_script_tags', encore_asset.value, encore_asset.webpackPackageName, encore_asset.webpackEntrypointName, encore_asset.htmlAttributes) }}
{% endfor %}
", "@EasyAdmin/includes/_encore_script_tags.html.twig", "/home/anthony/Documents/Test-api/back-api/vendor/easycorp/easyadmin-bundle/src/Resources/views/includes/_encore_script_tags.html.twig");
    }
}
