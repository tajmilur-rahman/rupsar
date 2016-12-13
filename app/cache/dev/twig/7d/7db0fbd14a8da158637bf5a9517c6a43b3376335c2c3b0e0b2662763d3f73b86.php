<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9a387e9b2b9eeeb378adc29f6f8c800c846cd1e018b837e066db7c99a9474bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9795e855dfe6c83ab5ac82078b040a4b315822b5688dcf367b3b084fe5d23f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9795e855dfe6c83ab5ac82078b040a4b315822b5688dcf367b3b084fe5d23f4e->enter($__internal_9795e855dfe6c83ab5ac82078b040a4b315822b5688dcf367b3b084fe5d23f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9795e855dfe6c83ab5ac82078b040a4b315822b5688dcf367b3b084fe5d23f4e->leave($__internal_9795e855dfe6c83ab5ac82078b040a4b315822b5688dcf367b3b084fe5d23f4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6810453bea150f82dc935530ad10f12dcc2b56897062fb2baac63ff4b6bffb4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6810453bea150f82dc935530ad10f12dcc2b56897062fb2baac63ff4b6bffb4a->enter($__internal_6810453bea150f82dc935530ad10f12dcc2b56897062fb2baac63ff4b6bffb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6810453bea150f82dc935530ad10f12dcc2b56897062fb2baac63ff4b6bffb4a->leave($__internal_6810453bea150f82dc935530ad10f12dcc2b56897062fb2baac63ff4b6bffb4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57342f4708e9aa62275ea77bff41ad0e7481fa10aee2ea137b9f536375cd3f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57342f4708e9aa62275ea77bff41ad0e7481fa10aee2ea137b9f536375cd3f01->enter($__internal_57342f4708e9aa62275ea77bff41ad0e7481fa10aee2ea137b9f536375cd3f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57342f4708e9aa62275ea77bff41ad0e7481fa10aee2ea137b9f536375cd3f01->leave($__internal_57342f4708e9aa62275ea77bff41ad0e7481fa10aee2ea137b9f536375cd3f01_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00c38954c1c236915e9253876a392288b4f568287b4479ac6d26b3d33befee4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c38954c1c236915e9253876a392288b4f568287b4479ac6d26b3d33befee4c->enter($__internal_00c38954c1c236915e9253876a392288b4f568287b4479ac6d26b3d33befee4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00c38954c1c236915e9253876a392288b4f568287b4479ac6d26b3d33befee4c->leave($__internal_00c38954c1c236915e9253876a392288b4f568287b4479ac6d26b3d33befee4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
