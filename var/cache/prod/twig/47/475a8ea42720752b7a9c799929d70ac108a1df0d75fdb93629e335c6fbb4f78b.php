<?php

/* base.html.twig */
class __TwigTemplate_9a1a9fb8477adeed674f5afb9b01e799043254eb891a7a86c2b5a50502ce75ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5369a4ea6d268f18d32f2f698bf648a4aa346524f189f2aa04ec6c70937a9c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5369a4ea6d268f18d32f2f698bf648a4aa346524f189f2aa04ec6c70937a9c2d->enter($__internal_5369a4ea6d268f18d32f2f698bf648a4aa346524f189f2aa04ec6c70937a9c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5369a4ea6d268f18d32f2f698bf648a4aa346524f189f2aa04ec6c70937a9c2d->leave($__internal_5369a4ea6d268f18d32f2f698bf648a4aa346524f189f2aa04ec6c70937a9c2d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d82b33d93b5a187ed116db2ef23b02597706661105389f2e8eed2f2334790ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d82b33d93b5a187ed116db2ef23b02597706661105389f2e8eed2f2334790ac->enter($__internal_3d82b33d93b5a187ed116db2ef23b02597706661105389f2e8eed2f2334790ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d82b33d93b5a187ed116db2ef23b02597706661105389f2e8eed2f2334790ac->leave($__internal_3d82b33d93b5a187ed116db2ef23b02597706661105389f2e8eed2f2334790ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_805067f61180dc6c698efe82534bd1db66b9446627b67e1d6ef8067ae87742e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805067f61180dc6c698efe82534bd1db66b9446627b67e1d6ef8067ae87742e4->enter($__internal_805067f61180dc6c698efe82534bd1db66b9446627b67e1d6ef8067ae87742e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_805067f61180dc6c698efe82534bd1db66b9446627b67e1d6ef8067ae87742e4->leave($__internal_805067f61180dc6c698efe82534bd1db66b9446627b67e1d6ef8067ae87742e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8abdbb5763f8411f71f1f61a0657d85f4c7489fc572c2f69c47daf180a8319de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abdbb5763f8411f71f1f61a0657d85f4c7489fc572c2f69c47daf180a8319de->enter($__internal_8abdbb5763f8411f71f1f61a0657d85f4c7489fc572c2f69c47daf180a8319de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8abdbb5763f8411f71f1f61a0657d85f4c7489fc572c2f69c47daf180a8319de->leave($__internal_8abdbb5763f8411f71f1f61a0657d85f4c7489fc572c2f69c47daf180a8319de_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4554fa62d21eb034888a6dc01b189df823016a5560badb565b4b5546b8cf2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4554fa62d21eb034888a6dc01b189df823016a5560badb565b4b5546b8cf2bc->enter($__internal_a4554fa62d21eb034888a6dc01b189df823016a5560badb565b4b5546b8cf2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4554fa62d21eb034888a6dc01b189df823016a5560badb565b4b5546b8cf2bc->leave($__internal_a4554fa62d21eb034888a6dc01b189df823016a5560badb565b4b5546b8cf2bc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
