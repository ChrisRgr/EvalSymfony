<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navbar.html.twig */
class __TwigTemplate_668fdc9fad485266f7ba8a19f0cd5d337d8d4dcf175b1344be44d9f888b050ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"#\">Evaluation ROGER Christopher</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
          <i class=\"fa fa-home\"></i>
          Home
          <span class=\"sr-only\">(current)</span>
          </a>
      </li>
    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category");
            echo "\">
          Category
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_add");
            echo "\">
          Add category
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
            echo "\">
          Product
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_add");
            echo "\">
          Add product
        </a>
      </li> 
    </ul>
    <ul class=\"navbar-nav \">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_userList");
            echo "\">
          Manage User
        </a>
      </li>#}
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
          Logout
        </a>
      </li>
    </ul>
  ";
        } else {
            // line 52
            echo "  </ul>
  <ul class=\"navbar-nav \">
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
          <i class=\"fa fa-sign-in\"></i>
          <span class=\"badge\">Sign in</span>
          </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                   <i class=\"fa fa-user-plus\"></i>
            <span class=\"badge\">Sign up</span>
        </a>
      </li>
    </ul>
  ";
        }
        // line 68
        echo "  </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 68,  134 => 61,  125 => 55,  120 => 52,  111 => 46,  103 => 41,  93 => 34,  85 => 29,  77 => 24,  69 => 19,  66 => 18,  64 => 17,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"#\">Evaluation ROGER Christopher</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_home')}}\">
          <i class=\"fa fa-home\"></i>
          Home
          <span class=\"sr-only\">(current)</span>
          </a>
      </li>
    {% if is_granted('ROLE_ADMIN') %}
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_category')}}\">
          Category
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_category_add')}}\">
          Add category
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_product')}}\">
          Product
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_product_add')}}\">
          Add product
        </a>
      </li> 
    </ul>
    <ul class=\"navbar-nav \">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('app_userList')}}\">
          Manage User
        </a>
      </li>#}
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('app_logout')}}\">
          Logout
        </a>
      </li>
    </ul>
  {% else %}
  </ul>
  <ul class=\"navbar-nav \">
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('app_login')}}\">
          <i class=\"fa fa-sign-in\"></i>
          <span class=\"badge\">Sign in</span>
          </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('app_register')}}\">
                   <i class=\"fa fa-user-plus\"></i>
            <span class=\"badge\">Sign up</span>
        </a>
      </li>
    </ul>
  {% endif %}
  </div>
</nav>
", "navbar.html.twig", "C:\\Users\\croger\\Documents personnel\\Symfony\\Symfony_ROGERC\\Evaluation_ROGERC\\templates\\navbar.html.twig");
    }
}
