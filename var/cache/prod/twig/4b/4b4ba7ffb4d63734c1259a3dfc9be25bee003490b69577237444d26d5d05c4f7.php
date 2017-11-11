<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_cf38fb5c9f4424cc309fca0898549e5eb5c46077909d4370d56ea4b9feee66b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_727d8f2d32e9033cfef82e3199342938e8bc5b07cc1cbff1bc2ff04422218112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727d8f2d32e9033cfef82e3199342938e8bc5b07cc1cbff1bc2ff04422218112->enter($__internal_727d8f2d32e9033cfef82e3199342938e8bc5b07cc1cbff1bc2ff04422218112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_727d8f2d32e9033cfef82e3199342938e8bc5b07cc1cbff1bc2ff04422218112->leave($__internal_727d8f2d32e9033cfef82e3199342938e8bc5b07cc1cbff1bc2ff04422218112_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7502f50525025da132504617ecec208bf843e42a393a48b5c1922a7b9f0db2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7502f50525025da132504617ecec208bf843e42a393a48b5c1922a7b9f0db2fd->enter($__internal_7502f50525025da132504617ecec208bf843e42a393a48b5c1922a7b9f0db2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7502f50525025da132504617ecec208bf843e42a393a48b5c1922a7b9f0db2fd->leave($__internal_7502f50525025da132504617ecec208bf843e42a393a48b5c1922a7b9f0db2fd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
