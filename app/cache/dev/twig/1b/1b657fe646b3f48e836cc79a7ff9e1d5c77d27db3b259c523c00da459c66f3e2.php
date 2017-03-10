<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_d1e89f15a0d83c30f42b86e160bca9e2e9a0df9efb380121c116b0b14bd2f902 extends Twig_Template
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
        $__internal_3bea036752b4d8cacd000427952ae9c3a84926bfab6db843139f1f0e3a2bcc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bea036752b4d8cacd000427952ae9c3a84926bfab6db843139f1f0e3a2bcc37->enter($__internal_3bea036752b4d8cacd000427952ae9c3a84926bfab6db843139f1f0e3a2bcc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3bea036752b4d8cacd000427952ae9c3a84926bfab6db843139f1f0e3a2bcc37->leave($__internal_3bea036752b4d8cacd000427952ae9c3a84926bfab6db843139f1f0e3a2bcc37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
