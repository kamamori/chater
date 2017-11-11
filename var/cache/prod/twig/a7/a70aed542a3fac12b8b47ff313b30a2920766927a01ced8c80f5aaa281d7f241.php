<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_28a817ad692cdfb3422550113966db3b51ff1e4961eff21239ddbf325764cc12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f51e2e2c238ced325ee2b4d68657e9b7a01526e6a8e3d06bce1d0af0e3ce2a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51e2e2c238ced325ee2b4d68657e9b7a01526e6a8e3d06bce1d0af0e3ce2a3f->enter($__internal_f51e2e2c238ced325ee2b4d68657e9b7a01526e6a8e3d06bce1d0af0e3ce2a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f51e2e2c238ced325ee2b4d68657e9b7a01526e6a8e3d06bce1d0af0e3ce2a3f->leave($__internal_f51e2e2c238ced325ee2b4d68657e9b7a01526e6a8e3d06bce1d0af0e3ce2a3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88016c897f8313eb3f61c19258f2bce24f2ca3f061437a143d8e4e267df69e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88016c897f8313eb3f61c19258f2bce24f2ca3f061437a143d8e4e267df69e17->enter($__internal_88016c897f8313eb3f61c19258f2bce24f2ca3f061437a143d8e4e267df69e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_88016c897f8313eb3f61c19258f2bce24f2ca3f061437a143d8e4e267df69e17->leave($__internal_88016c897f8313eb3f61c19258f2bce24f2ca3f061437a143d8e4e267df69e17_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
