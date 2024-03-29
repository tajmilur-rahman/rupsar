<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig */
class __TwigTemplate_a81dbec9ec34a855452538ec0869f3b6fbeab349422a4c9af6856cabad14021c extends Twig_Template
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
        // line 25
        echo "<div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title module-modal-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connect to Addons marketplace", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Link your shop to your Addons account: it will automatically import the modules you purchased. Don't have an account yet?", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "
                      <a href=\"http://addons.prestashop.com/authentication.php\" target=\"_blank\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign up now", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
                  </p>
                  <form id=\"addons-connect-form\"  action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addons_login");
        echo "\" method=\"POST\">
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email address", array(), "Admin.Global"), "html", null, true);
        echo "</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "Admin.Global"), "html", null, true);
        echo "</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input name=\"addons_remember_me\" type=\"checkbox\"> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", array(), "Admin.Global"), "html", null, true);
        echo "
                    </label>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Let's go!", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                  <button id=\"addons_login_btn\" class=\"btn btn-primary-reverse btn-lg onclick\" style=\"display:none;\"></button>
                </form>
                <p>
                    <a href=\"http://addons.prestashop.com/password.php\" target=\"_blank\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot your password?", array(), "Admin.Global"), "html", null, true);
        echo "</a>
                </p>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title module-modal-title\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm logout", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to log out your Addons account. You might miss important updates of Addons you've bought.", array(), "Admin.Modules.Notification"), "html", null, true);
        echo "
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", array(), "Admin.Actions"), "html", null, true);
        echo "\">
          <a class=\"btn btn-primary uppercase\" href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addons_logout");
        echo "\" id=\"module-modal-addons-logout-ack\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, log out", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
      </div>

    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 85,  113 => 84,  104 => 78,  95 => 72,  78 => 58,  71 => 54,  65 => 51,  57 => 46,  50 => 42,  45 => 40,  40 => 38,  36 => 37,  27 => 31,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
