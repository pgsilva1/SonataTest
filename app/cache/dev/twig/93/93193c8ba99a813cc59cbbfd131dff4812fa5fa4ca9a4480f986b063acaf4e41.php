<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8f2d423055adf074cce93833af680120de447b492173960ec8f0d43c0c1b8b18 extends Twig_Template
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
        $__internal_09eee6d829f0879a9310b1731b1d31faa4543cc07e8a9dbc4cfada7ad3049a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09eee6d829f0879a9310b1731b1d31faa4543cc07e8a9dbc4cfada7ad3049a8a->enter($__internal_09eee6d829f0879a9310b1731b1d31faa4543cc07e8a9dbc4cfada7ad3049a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_09eee6d829f0879a9310b1731b1d31faa4543cc07e8a9dbc4cfada7ad3049a8a->leave($__internal_09eee6d829f0879a9310b1731b1d31faa4543cc07e8a9dbc4cfada7ad3049a8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
