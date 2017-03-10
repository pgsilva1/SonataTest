<?php

/* ::base.html.twig */
class __TwigTemplate_d863cead770010e6ac5e930b5910d68d0337522cae0715ee3ac6dff7efad42ad extends Twig_Template
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
        $__internal_602fe6cffcafe63a7c87c177c21aa6e4e9473f5fdd70dd7326e552dc59c96661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602fe6cffcafe63a7c87c177c21aa6e4e9473f5fdd70dd7326e552dc59c96661->enter($__internal_602fe6cffcafe63a7c87c177c21aa6e4e9473f5fdd70dd7326e552dc59c96661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_602fe6cffcafe63a7c87c177c21aa6e4e9473f5fdd70dd7326e552dc59c96661->leave($__internal_602fe6cffcafe63a7c87c177c21aa6e4e9473f5fdd70dd7326e552dc59c96661_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17f567d43e0848c0b71913924fab9b897ada9b5ad49cf2e076a057320e7d4f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f567d43e0848c0b71913924fab9b897ada9b5ad49cf2e076a057320e7d4f47->enter($__internal_17f567d43e0848c0b71913924fab9b897ada9b5ad49cf2e076a057320e7d4f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_17f567d43e0848c0b71913924fab9b897ada9b5ad49cf2e076a057320e7d4f47->leave($__internal_17f567d43e0848c0b71913924fab9b897ada9b5ad49cf2e076a057320e7d4f47_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b34121d11f0f9d57261b132a4be10ec2b9dd7576dc7f9a2c1c21c4a1fe5ec32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b34121d11f0f9d57261b132a4be10ec2b9dd7576dc7f9a2c1c21c4a1fe5ec32->enter($__internal_1b34121d11f0f9d57261b132a4be10ec2b9dd7576dc7f9a2c1c21c4a1fe5ec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1b34121d11f0f9d57261b132a4be10ec2b9dd7576dc7f9a2c1c21c4a1fe5ec32->leave($__internal_1b34121d11f0f9d57261b132a4be10ec2b9dd7576dc7f9a2c1c21c4a1fe5ec32_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe4d377a865f3768915e998b9c0e267c825f69fdeb61c6eca77b828b6c72859e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4d377a865f3768915e998b9c0e267c825f69fdeb61c6eca77b828b6c72859e->enter($__internal_fe4d377a865f3768915e998b9c0e267c825f69fdeb61c6eca77b828b6c72859e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe4d377a865f3768915e998b9c0e267c825f69fdeb61c6eca77b828b6c72859e->leave($__internal_fe4d377a865f3768915e998b9c0e267c825f69fdeb61c6eca77b828b6c72859e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfddf90e8f5da29496389386f696de1564f13574f57f4dea22f599ce87ade95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfddf90e8f5da29496389386f696de1564f13574f57f4dea22f599ce87ade95d->enter($__internal_cfddf90e8f5da29496389386f696de1564f13574f57f4dea22f599ce87ade95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfddf90e8f5da29496389386f696de1564f13574f57f4dea22f599ce87ade95d->leave($__internal_cfddf90e8f5da29496389386f696de1564f13574f57f4dea22f599ce87ade95d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/app/Resources/views/base.html.twig");
    }
}
