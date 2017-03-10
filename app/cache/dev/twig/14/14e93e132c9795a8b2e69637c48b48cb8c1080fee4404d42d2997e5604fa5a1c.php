<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f1a63cb4ce14985eadff8a2a3bce58a15f92c01ee57265a05d56a4c28463462f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2adb02a18cf0b6428e893de08d06907f902a79b4e0e1d0195023b0c236a0eafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adb02a18cf0b6428e893de08d06907f902a79b4e0e1d0195023b0c236a0eafb->enter($__internal_2adb02a18cf0b6428e893de08d06907f902a79b4e0e1d0195023b0c236a0eafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2adb02a18cf0b6428e893de08d06907f902a79b4e0e1d0195023b0c236a0eafb->leave($__internal_2adb02a18cf0b6428e893de08d06907f902a79b4e0e1d0195023b0c236a0eafb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
