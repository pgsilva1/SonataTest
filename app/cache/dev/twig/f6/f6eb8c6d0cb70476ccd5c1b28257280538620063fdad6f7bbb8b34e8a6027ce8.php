<?php

/* base.html.twig */
class __TwigTemplate_b9579e2ea944713e3b0a7a169973801afdf4e369f014b4260afcbef915b1c8c8 extends Twig_Template
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
        $__internal_516f683f5649c124571fe31a5520215816348557f3de7b74470e1034ce8f8baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516f683f5649c124571fe31a5520215816348557f3de7b74470e1034ce8f8baf->enter($__internal_516f683f5649c124571fe31a5520215816348557f3de7b74470e1034ce8f8baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_516f683f5649c124571fe31a5520215816348557f3de7b74470e1034ce8f8baf->leave($__internal_516f683f5649c124571fe31a5520215816348557f3de7b74470e1034ce8f8baf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d6179482cf3a66628f2f5aaa6ac78bd3d7c8aa67b1be8f43ef77a1f86882e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6179482cf3a66628f2f5aaa6ac78bd3d7c8aa67b1be8f43ef77a1f86882e87->enter($__internal_6d6179482cf3a66628f2f5aaa6ac78bd3d7c8aa67b1be8f43ef77a1f86882e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6d6179482cf3a66628f2f5aaa6ac78bd3d7c8aa67b1be8f43ef77a1f86882e87->leave($__internal_6d6179482cf3a66628f2f5aaa6ac78bd3d7c8aa67b1be8f43ef77a1f86882e87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d22565924a758ca0fc2b772254df458690441026887db7e3c0a628e7bc165246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22565924a758ca0fc2b772254df458690441026887db7e3c0a628e7bc165246->enter($__internal_d22565924a758ca0fc2b772254df458690441026887db7e3c0a628e7bc165246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d22565924a758ca0fc2b772254df458690441026887db7e3c0a628e7bc165246->leave($__internal_d22565924a758ca0fc2b772254df458690441026887db7e3c0a628e7bc165246_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f871d05a75c25b5959014090fb027f26ee2f5ee5013b2dac69b4554ed2bc1810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f871d05a75c25b5959014090fb027f26ee2f5ee5013b2dac69b4554ed2bc1810->enter($__internal_f871d05a75c25b5959014090fb027f26ee2f5ee5013b2dac69b4554ed2bc1810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f871d05a75c25b5959014090fb027f26ee2f5ee5013b2dac69b4554ed2bc1810->leave($__internal_f871d05a75c25b5959014090fb027f26ee2f5ee5013b2dac69b4554ed2bc1810_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4fc557b703503aea500fd072ed1ddc6d4913d049ed7f1ff0d70fb22b058ef96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fc557b703503aea500fd072ed1ddc6d4913d049ed7f1ff0d70fb22b058ef96->enter($__internal_b4fc557b703503aea500fd072ed1ddc6d4913d049ed7f1ff0d70fb22b058ef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b4fc557b703503aea500fd072ed1ddc6d4913d049ed7f1ff0d70fb22b058ef96->leave($__internal_b4fc557b703503aea500fd072ed1ddc6d4913d049ed7f1ff0d70fb22b058ef96_prof);

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
", "base.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/app/Resources/views/base.html.twig");
    }
}
