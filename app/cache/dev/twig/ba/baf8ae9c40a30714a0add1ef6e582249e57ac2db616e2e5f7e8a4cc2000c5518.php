<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6e11d4d35b69addca76b758d60c1d14590a15390069ff7e9c6d4b2b3ace9cb23 extends Twig_Template
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
        $__internal_976a2f17e7be591128723311902bb21d9284bdd1e8cf0da281406c85bbbe2baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976a2f17e7be591128723311902bb21d9284bdd1e8cf0da281406c85bbbe2baf->enter($__internal_976a2f17e7be591128723311902bb21d9284bdd1e8cf0da281406c85bbbe2baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_976a2f17e7be591128723311902bb21d9284bdd1e8cf0da281406c85bbbe2baf->leave($__internal_976a2f17e7be591128723311902bb21d9284bdd1e8cf0da281406c85bbbe2baf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
