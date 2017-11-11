<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2b017103db3fda91f2796f75daf3df4e1bad8985c51a9e1bc25c6ba6233c1362 extends Twig_Template
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
        $__internal_bbeb7ea83912dbd220476a3c777fe9bd09389990da550ac36769295025219e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbeb7ea83912dbd220476a3c777fe9bd09389990da550ac36769295025219e82->enter($__internal_bbeb7ea83912dbd220476a3c777fe9bd09389990da550ac36769295025219e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbeb7ea83912dbd220476a3c777fe9bd09389990da550ac36769295025219e82->leave($__internal_bbeb7ea83912dbd220476a3c777fe9bd09389990da550ac36769295025219e82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2bcbd4019fa0a8b46f4eb11858ab8dd1de9ee6668edd6b50e2f59a2b5e0a41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bcbd4019fa0a8b46f4eb11858ab8dd1de9ee6668edd6b50e2f59a2b5e0a41d->enter($__internal_a2bcbd4019fa0a8b46f4eb11858ab8dd1de9ee6668edd6b50e2f59a2b5e0a41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "qsdsqdqs
    ";
        // line 5
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a2bcbd4019fa0a8b46f4eb11858ab8dd1de9ee6668edd6b50e2f59a2b5e0a41d->leave($__internal_a2bcbd4019fa0a8b46f4eb11858ab8dd1de9ee6668edd6b50e2f59a2b5e0a41d_prof);

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
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
qsdsqdqs
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
