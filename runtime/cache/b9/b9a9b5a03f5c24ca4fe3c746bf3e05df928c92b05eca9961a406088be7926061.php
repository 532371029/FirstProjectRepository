<?php

/* layout.html */
class __TwigTemplate_060670e18ca32edf79fe522c396ad4013bf1e5e95a3be686823795aa99b285ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"/public/statics/css/index.css\" />
    <title>JetPHP制作简易留言板</title>
</head>
<body>
<div id=\"header\">
    <h3>JetPHP制作简易留言板</h3>
</div>
";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "<div id=\"footer\">
    <h3>JetPHP留言板 @copyright 2018 JetPHP版权所有 </h3>
</div>
</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  34 => 12,  32 => 11,  20 => 1,);
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
    <link rel=\"stylesheet\" href=\"/public/statics/css/index.css\" />
    <title>JetPHP制作简易留言板</title>
</head>
<body>
<div id=\"header\">
    <h3>JetPHP制作简易留言板</h3>
</div>
{% block content %} {% endblock %}
<div id=\"footer\">
    <h3>JetPHP留言板 @copyright 2018 JetPHP版权所有 </h3>
</div>
</body>
</html>", "layout.html", "D:\\wamp64\\www\\DIYKJ\\app\\view\\layout.html");
    }
}
