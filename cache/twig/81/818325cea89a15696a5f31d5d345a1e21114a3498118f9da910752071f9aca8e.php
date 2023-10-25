<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_2b669e0e90bdb1e239fcc7683ee15f6ca606543c843cfe682c3889625353c0e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo " <footer class=\"footer ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "scrollappear_enabled", [])) {
            echo "scrollappear";
        }
        echo "\">

   <ul class=\"header-links\" style=\"text-align:center; float: none!important;\">
   

    ";
        // line 6
        if (($this->getAttribute(($context["theme_config"] ?? null), "about_enabled", []) == true)) {
            // line 7
            echo "      <li>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('relative_url')->getCallable(), ["about"]), "html", null, true);
            echo "\" title=\"About me\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-about\">
  <use href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/about.svg"), "html", null, true);
            echo "#icon-about\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/about.svg"), "html", null, true);
            echo "#icon-about\">
          ";
            // line 11
            $this->loadTemplate("icons/about.svg", "partials/footer.html.twig", 11)->display($context);
            // line 12
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_twitter", [])) {
            // line 18
            echo "      <li>
        <a href=\"https://twitter.com/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_twitter", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Twitter\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-twitter\">
  <use href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/twitter.svg"), "html", null, true);
            echo "#icon-twitter\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/twitter.svg"), "html", null, true);
            echo "#icon-twitter\">
          ";
            // line 22
            $this->loadTemplate("icons/twitter.svg", "partials/footer.html.twig", 22)->display($context);
            // line 23
            echo "        </use>
    </svg>
        </a>
      </li>
     
    ";
        }
        // line 29
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_facebook", [])) {
            // line 30
            echo "      <li>
        <a href=\"https://www.facebook.com/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_facebook", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Facebook\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-facebook\">
  <use href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/facebook.svg"), "html", null, true);
            echo "#icon-facebook\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/facebook.svg"), "html", null, true);
            echo "#icon-facebook\">
          ";
            // line 34
            $this->loadTemplate("icons/facebook.svg", "partials/footer.html.twig", 34)->display($context);
            // line 35
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 40
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_medium", [])) {
            // line 41
            echo "      <li>
        <a href=\"https://medium.com/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_medium", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Medium\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-medium\">
  <use href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/medium.svg"), "html", null, true);
            echo "#icon-medium\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/medium.svg"), "html", null, true);
            echo "#icon-medium\">
          ";
            // line 45
            $this->loadTemplate("icons/medium.svg", "partials/footer.html.twig", 45)->display($context);
            // line 46
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 51
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_github", [])) {
            // line 52
            echo "      <li>
        <a href=\"https://github.com/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_github", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"GitHub\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-github\">
  <use href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/github.svg"), "html", null, true);
            echo "#icon-github\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/github.svg"), "html", null, true);
            echo "#icon-github\">
          ";
            // line 56
            $this->loadTemplate("icons/github.svg", "partials/footer.html.twig", 56)->display($context);
            // line 57
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 62
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_gitlab", [])) {
            // line 63
            echo "      <li>
        <a href=\"https://gitlab.com/";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_gitlab", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"GitLab\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-gitlab\">
  <use href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/gitlab.svg"), "html", null, true);
            echo "#icon-gitlab\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/gitlab.svg"), "html", null, true);
            echo "#icon-gitlab\">
          ";
            // line 67
            $this->loadTemplate("icons/gitlab.svg", "partials/footer.html.twig", 67)->display($context);
            // line 68
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 73
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_bitbucket", [])) {
            // line 74
            echo "      <li>
        <a href=\"https://bitbucket.org/";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_bitbucket", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Bitbucket\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-bitbucket\">
  <use href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/bitbucket.svg"), "html", null, true);
            echo "#icon-bitbucket\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/bitbucket.svg"), "html", null, true);
            echo "#icon-bitbucket\">
          ";
            // line 78
            $this->loadTemplate("icons/bitbucket.svg", "partials/footer.html.twig", 78)->display($context);
            // line 79
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 84
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_stackoverflow", [])) {
            // line 85
            echo "      <li>
        <a href=\"https://stackoverflow.com/users/";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_stackoverflow", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Stack Overflow\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-stackoverflow\">
  <use href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/stackoverflow.svg"), "html", null, true);
            echo "#icon-stackoverflow\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/stackoverflow.svg"), "html", null, true);
            echo "#icon-stackoverflow\">
          ";
            // line 89
            $this->loadTemplate("icons/stackoverflow.svg", "partials/footer.html.twig", 89)->display($context);
            // line 90
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 95
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_keybase", [])) {
            // line 96
            echo "      <li>
        <a href=\"https://keybase.io/";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_keybase", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Keybase\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-keybase\">
  <use href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/keybase.svg"), "html", null, true);
            echo "#icon-keybase\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/keybase.svg"), "html", null, true);
            echo "#icon-keybase\">
          ";
            // line 100
            $this->loadTemplate("icons/keybase.svg", "partials/footer.html.twig", 100)->display($context);
            // line 101
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 106
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_docker", [])) {
            // line 107
            echo "      <li>
        <a href=\"https://hub.docker.com/r/";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_docker", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Docker Hub\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-docker\">
  <use href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/docker.svg"), "html", null, true);
            echo "#icon-docker\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/docker.svg"), "html", null, true);
            echo "#icon-docker\">
          ";
            // line 111
            $this->loadTemplate("icons/docker.svg", "partials/footer.html.twig", 111)->display($context);
            // line 112
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 117
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_linkedin", [])) {
            // line 118
            echo "      <li>
        <a href=\"https://www.linkedin.com/in/";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_linkedin", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"LinkedIn\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-linkedin\">
  <use href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/linkedin.svg"), "html", null, true);
            echo "#icon-linkedin\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/linkedin.svg"), "html", null, true);
            echo "#icon-linkedin\">
          ";
            // line 122
            $this->loadTemplate("icons/linkedin.svg", "partials/footer.html.twig", 122)->display($context);
            // line 123
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 128
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_dribbble", [])) {
            // line 129
            echo "      <li>
        <a href=\"https://dribbble.com/";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_dribbble", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Dribbble\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-dribbble\">
  <use href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/dribbble.svg"), "html", null, true);
            echo "#icon-dribbble\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/dribbble.svg"), "html", null, true);
            echo "#icon-dribbble\">
          ";
            // line 133
            $this->loadTemplate("icons/dribbble.svg", "partials/footer.html.twig", 133)->display($context);
            // line 134
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 139
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_flickr", [])) {
            // line 140
            echo "      <li>
        <a href=\"https://www.flickr.com/photos/";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_flickr", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Flickr\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-flickr\">
  <use href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/flickr.svg"), "html", null, true);
            echo "#icon-flickr\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/flickr.svg"), "html", null, true);
            echo "#icon-flickr\">
          ";
            // line 144
            $this->loadTemplate("icons/flickr.svg", "partials/footer.html.twig", 144)->display($context);
            // line 145
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 150
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_instagram", [])) {
            // line 151
            echo "      <li>
        <a href=\"https://instagram.com/";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_instagram", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Instagram\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-instagram\">
  <use href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/instagram.svg"), "html", null, true);
            echo "#icon-instagram\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/instagram.svg"), "html", null, true);
            echo "#icon-instagram\">
          ";
            // line 155
            $this->loadTemplate("icons/instagram.svg", "partials/footer.html.twig", 155)->display($context);
            // line 156
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 161
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_tumblr", [])) {
            // line 162
            echo "      <li>
        <a href=\"https://";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_tumblr", []), "html", null, true);
            echo ".tumblr.com\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Tumblr\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-tumblr\">
  <use href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/tumblr.svg"), "html", null, true);
            echo "#icon-tumblr\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/tumblr.svg"), "html", null, true);
            echo "#icon-tumblr\">
          ";
            // line 166
            $this->loadTemplate("icons/tumblr.svg", "partials/footer.html.twig", 166)->display($context);
            // line 167
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 172
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_spotify", [])) {
            // line 173
            echo "      <li>
        <a href=\"https://play.spotify.com/user/";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_spotify", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Spotify\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-spotify\">
  <use href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/spotify.svg"), "html", null, true);
            echo "#icon-spotify\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/spotify.svg"), "html", null, true);
            echo "#icon-spotify\">
          ";
            // line 177
            $this->loadTemplate("icons/spotify.svg", "partials/footer.html.twig", 177)->display($context);
            // line 178
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 183
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_youtube", [])) {
            // line 184
            echo "      <li>
        <a href=\"https://www.youtube.com/user/";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_youtube", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Youtube\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-youtube\">
  <use href=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/youtube.svg"), "html", null, true);
            echo "#icon-youtube\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/youtube.svg"), "html", null, true);
            echo "#icon-youtube\">
          ";
            // line 188
            $this->loadTemplate("icons/youtube.svg", "partials/footer.html.twig", 188)->display($context);
            // line 189
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 194
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_twitch", [])) {
            // line 195
            echo "      <li>
        <a href=\"https://www.twitch.tv/";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_twitch", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Twitch\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-twitch\">
  <use href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/twitch.svg"), "html", null, true);
            echo "#icon-twitch\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/twitch.svg"), "html", null, true);
            echo "#icon-twitch\">
          ";
            // line 199
            $this->loadTemplate("icons/twitch.svg", "partials/footer.html.twig", 199)->display($context);
            // line 200
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 205
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_steam", [])) {
            // line 206
            echo "      <li>
        <a href=\"https://steamcommunity.com/id/";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_steam", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Steam\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-steam\">
  <use href=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/steam.svg"), "html", null, true);
            echo "#icon-steam\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/steam.svg"), "html", null, true);
            echo "#icon-steam\">
          ";
            // line 210
            $this->loadTemplate("icons/steam.svg", "partials/footer.html.twig", 210)->display($context);
            // line 211
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 216
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_discord", [])) {
            // line 217
            echo "      <li>
        <a href=\"https://discord.gg/";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_discord", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Discord Server\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-discord\">
            <use href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/discord.svg"), "html", null, true);
            echo "#icon-discord\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/discord.svg"), "html", null, true);
            echo "#icon-discord\">
          ";
            // line 221
            $this->loadTemplate("icons/discord.svg", "partials/footer.html.twig", 221)->display($context);
            // line 222
            echo "        </a>
      </li>
    ";
        }
        // line 225
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_bitcoin", [])) {
            // line 226
            echo "      <li>
        <a href=\"https://blockexplorer.com/address/";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_bitcoin", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Bitcoin\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-bitcoin\">
            <use href=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/bitcoin.svg"), "html", null, true);
            echo "#icon-bitcoin\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/bitcoin.svg"), "html", null, true);
            echo "#icon-bitcoin\">
          ";
            // line 230
            $this->loadTemplate("icons/bitcoin.svg", "partials/footer.html.twig", 230)->display($context);
            // line 231
            echo "        </a>
      </li>
    ";
        }
        // line 234
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_ethereum", [])) {
            // line 235
            echo "      <li>
        <a href=\"https://etherscan.io/address/";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_ethereum", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Ethereum\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-ethereum\">
            <use href=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/ethereum.svg"), "html", null, true);
            echo "#icon-ethereum\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/ethereum.svg"), "html", null, true);
            echo "#icon-ethereum\">
          ";
            // line 239
            $this->loadTemplate("icons/ethereum.svg", "partials/footer.html.twig", 239)->display($context);
            // line 240
            echo "        </a>
      </li>
    ";
        }
        // line 243
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_email", [])) {
            // line 244
            echo "      <li>
        <a href=\"mailto:";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_email", []), "html", null, true);
            echo "\" title=\"Email\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-email\">
            <use href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/email.svg"), "html", null, true);
            echo "#icon-email\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/email.svg"), "html", null, true);
            echo "#icon-email\">
          ";
            // line 248
            $this->loadTemplate("icons/email.svg", "partials/footer.html.twig", 248)->display($context);
            // line 249
            echo "        </a>
      </li>
    ";
        }
        // line 252
        echo "    ";
        if (($this->getAttribute(($context["theme_config"] ?? null), "rss_enabled", []) == true)) {
            // line 253
            echo "      <li>
<a href=\"";
            // line 254
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo ".rss\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"RSS\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-rss\">
            <use href=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/rss.svg"), "html", null, true);
            echo "#icon-rss\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/rss.svg"), "html", null, true);
            echo "#icon-rss\">
          ";
            // line 257
            $this->loadTemplate("icons/rss.svg", "partials/footer.html.twig", 257)->display($context);
            // line 258
            echo "        </a>
      </li>
    ";
        }
        // line 261
        echo "  </ul>
   <p>
   ";
        // line 263
        echo $this->getAttribute(($context["theme_config"] ?? null), "footer_text", []);
        echo "
  </p>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 263,  655 => 261,  650 => 258,  648 => 257,  642 => 256,  637 => 254,  634 => 253,  631 => 252,  626 => 249,  624 => 248,  618 => 247,  613 => 245,  610 => 244,  607 => 243,  602 => 240,  600 => 239,  594 => 238,  589 => 236,  586 => 235,  583 => 234,  578 => 231,  576 => 230,  570 => 229,  565 => 227,  562 => 226,  559 => 225,  554 => 222,  552 => 221,  546 => 220,  541 => 218,  538 => 217,  535 => 216,  528 => 211,  526 => 210,  520 => 209,  515 => 207,  512 => 206,  509 => 205,  502 => 200,  500 => 199,  494 => 198,  489 => 196,  486 => 195,  483 => 194,  476 => 189,  474 => 188,  468 => 187,  463 => 185,  460 => 184,  457 => 183,  450 => 178,  448 => 177,  442 => 176,  437 => 174,  434 => 173,  431 => 172,  424 => 167,  422 => 166,  416 => 165,  411 => 163,  408 => 162,  405 => 161,  398 => 156,  396 => 155,  390 => 154,  385 => 152,  382 => 151,  379 => 150,  372 => 145,  370 => 144,  364 => 143,  359 => 141,  356 => 140,  353 => 139,  346 => 134,  344 => 133,  338 => 132,  333 => 130,  330 => 129,  327 => 128,  320 => 123,  318 => 122,  312 => 121,  307 => 119,  304 => 118,  301 => 117,  294 => 112,  292 => 111,  286 => 110,  281 => 108,  278 => 107,  275 => 106,  268 => 101,  266 => 100,  260 => 99,  255 => 97,  252 => 96,  249 => 95,  242 => 90,  240 => 89,  234 => 88,  229 => 86,  226 => 85,  223 => 84,  216 => 79,  214 => 78,  208 => 77,  203 => 75,  200 => 74,  197 => 73,  190 => 68,  188 => 67,  182 => 66,  177 => 64,  174 => 63,  171 => 62,  164 => 57,  162 => 56,  156 => 55,  151 => 53,  148 => 52,  145 => 51,  138 => 46,  136 => 45,  130 => 44,  125 => 42,  122 => 41,  119 => 40,  112 => 35,  110 => 34,  104 => 33,  99 => 31,  96 => 30,  93 => 29,  85 => 23,  83 => 22,  77 => 21,  72 => 19,  69 => 18,  66 => 17,  59 => 12,  57 => 11,  51 => 10,  46 => 8,  43 => 7,  41 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <footer class=\"footer {% if theme_config.scrollappear_enabled %}scrollappear{% endif %}\">

   <ul class=\"header-links\" style=\"text-align:center; float: none!important;\">
   

    {% if theme_config.about_enabled == true %}
      <li>
        <a href=\"{{ 'about' | relative_url }}\" title=\"About me\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-about\">
  <use href=\"{{url('theme://templates/icons/about.svg')}}#icon-about\" xlink:href=\"{{url('theme://templates/icons/about.svg')}}#icon-about\">
          {% include 'icons/about.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_twitter %}
      <li>
        <a href=\"https://twitter.com/{{ theme_config.social_twitter }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Twitter\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-twitter\">
  <use href=\"{{url('theme://templates/icons/twitter.svg')}}#icon-twitter\" xlink:href=\"{{url('theme://templates/icons/twitter.svg')}}#icon-twitter\">
          {% include 'icons/twitter.svg' %}
        </use>
    </svg>
        </a>
      </li>
     
    {% endif %}
    {% if theme_config.social_facebook %}
      <li>
        <a href=\"https://www.facebook.com/{{ theme_config.social_facebook }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Facebook\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-facebook\">
  <use href=\"{{url('theme://templates/icons/facebook.svg')}}#icon-facebook\" xlink:href=\"{{url('theme://templates/icons/facebook.svg')}}#icon-facebook\">
          {% include 'icons/facebook.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_medium %}
      <li>
        <a href=\"https://medium.com/{{ theme_config.social_medium }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Medium\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-medium\">
  <use href=\"{{url('theme://templates/icons/medium.svg')}}#icon-medium\" xlink:href=\"{{url('theme://templates/icons/medium.svg')}}#icon-medium\">
          {% include 'icons/medium.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_github %}
      <li>
        <a href=\"https://github.com/{{ theme_config.social_github }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"GitHub\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-github\">
  <use href=\"{{url('theme://templates/icons/github.svg')}}#icon-github\" xlink:href=\"{{url('theme://templates/icons/github.svg')}}#icon-github\">
          {% include 'icons/github.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_gitlab %}
      <li>
        <a href=\"https://gitlab.com/{{ theme_config.social_gitlab }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"GitLab\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-gitlab\">
  <use href=\"{{url('theme://templates/icons/gitlab.svg')}}#icon-gitlab\" xlink:href=\"{{url('theme://templates/icons/gitlab.svg')}}#icon-gitlab\">
          {% include 'icons/gitlab.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_bitbucket %}
      <li>
        <a href=\"https://bitbucket.org/{{ theme_config.social_bitbucket }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Bitbucket\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-bitbucket\">
  <use href=\"{{url('theme://templates/icons/bitbucket.svg')}}#icon-bitbucket\" xlink:href=\"{{url('theme://templates/icons/bitbucket.svg')}}#icon-bitbucket\">
          {% include 'icons/bitbucket.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_stackoverflow %}
      <li>
        <a href=\"https://stackoverflow.com/users/{{ theme_config.social_stackoverflow }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Stack Overflow\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-stackoverflow\">
  <use href=\"{{url('theme://templates/icons/stackoverflow.svg')}}#icon-stackoverflow\" xlink:href=\"{{url('theme://templates/icons/stackoverflow.svg')}}#icon-stackoverflow\">
          {% include 'icons/stackoverflow.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_keybase %}
      <li>
        <a href=\"https://keybase.io/{{ theme_config.social_keybase }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Keybase\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-keybase\">
  <use href=\"{{url('theme://templates/icons/keybase.svg')}}#icon-keybase\" xlink:href=\"{{url('theme://templates/icons/keybase.svg')}}#icon-keybase\">
          {% include 'icons/keybase.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_docker %}
      <li>
        <a href=\"https://hub.docker.com/r/{{ theme_config.social_docker }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Docker Hub\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-docker\">
  <use href=\"{{url('theme://templates/icons/docker.svg')}}#icon-docker\" xlink:href=\"{{url('theme://templates/icons/docker.svg')}}#icon-docker\">
          {% include 'icons/docker.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_linkedin %}
      <li>
        <a href=\"https://www.linkedin.com/in/{{ theme_config.social_linkedin }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"LinkedIn\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-linkedin\">
  <use href=\"{{url('theme://templates/icons/linkedin.svg')}}#icon-linkedin\" xlink:href=\"{{url('theme://templates/icons/linkedin.svg')}}#icon-linkedin\">
          {% include 'icons/linkedin.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_dribbble %}
      <li>
        <a href=\"https://dribbble.com/{{ theme_config.social_dribbble }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Dribbble\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-dribbble\">
  <use href=\"{{url('theme://templates/icons/dribbble.svg')}}#icon-dribbble\" xlink:href=\"{{url('theme://templates/icons/dribbble.svg')}}#icon-dribbble\">
          {% include 'icons/dribbble.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_flickr %}
      <li>
        <a href=\"https://www.flickr.com/photos/{{ theme_config.social_flickr }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Flickr\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-flickr\">
  <use href=\"{{url('theme://templates/icons/flickr.svg')}}#icon-flickr\" xlink:href=\"{{url('theme://templates/icons/flickr.svg')}}#icon-flickr\">
          {% include 'icons/flickr.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_instagram %}
      <li>
        <a href=\"https://instagram.com/{{ theme_config.social_instagram }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Instagram\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-instagram\">
  <use href=\"{{url('theme://templates/icons/instagram.svg')}}#icon-instagram\" xlink:href=\"{{url('theme://templates/icons/instagram.svg')}}#icon-instagram\">
          {% include 'icons/instagram.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_tumblr %}
      <li>
        <a href=\"https://{{ theme_config.social_tumblr }}.tumblr.com\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Tumblr\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-tumblr\">
  <use href=\"{{url('theme://templates/icons/tumblr.svg')}}#icon-tumblr\" xlink:href=\"{{url('theme://templates/icons/tumblr.svg')}}#icon-tumblr\">
          {% include 'icons/tumblr.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_spotify %}
      <li>
        <a href=\"https://play.spotify.com/user/{{ theme_config.social_spotify }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Spotify\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-spotify\">
  <use href=\"{{url('theme://templates/icons/spotify.svg')}}#icon-spotify\" xlink:href=\"{{url('theme://templates/icons/spotify.svg')}}#icon-spotify\">
          {% include 'icons/spotify.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_youtube %}
      <li>
        <a href=\"https://www.youtube.com/user/{{ theme_config.social_youtube }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Youtube\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-youtube\">
  <use href=\"{{url('theme://templates/icons/youtube.svg')}}#icon-youtube\" xlink:href=\"{{url('theme://templates/icons/youtube.svg')}}#icon-youtube\">
          {% include 'icons/youtube.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_twitch %}
      <li>
        <a href=\"https://www.twitch.tv/{{ theme_config.social_twitch }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Twitch\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-twitch\">
  <use href=\"{{url('theme://templates/icons/twitch.svg')}}#icon-twitch\" xlink:href=\"{{url('theme://templates/icons/twitch.svg')}}#icon-twitch\">
          {% include 'icons/twitch.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_steam %}
      <li>
        <a href=\"https://steamcommunity.com/id/{{ theme_config.social_steam }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Steam\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-steam\">
  <use href=\"{{url('theme://templates/icons/steam.svg')}}#icon-steam\" xlink:href=\"{{url('theme://templates/icons/steam.svg')}}#icon-steam\">
          {% include 'icons/steam.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_discord %}
      <li>
        <a href=\"https://discord.gg/{{ theme_config.social_discord }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Discord Server\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-discord\">
            <use href=\"{{url('theme://templates/icons/discord.svg')}}#icon-discord\" xlink:href=\"{{url('theme://templates/icons/discord.svg')}}#icon-discord\">
          {% include 'icons/discord.svg' %}
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_bitcoin %}
      <li>
        <a href=\"https://blockexplorer.com/address/{{ theme_config.social_bitcoin }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Bitcoin\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-bitcoin\">
            <use href=\"{{url('theme://templates/icons/bitcoin.svg')}}#icon-bitcoin\" xlink:href=\"{{url('theme://templates/icons/bitcoin.svg')}}#icon-bitcoin\">
          {% include 'icons/bitcoin.svg' %}
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_ethereum %}
      <li>
        <a href=\"https://etherscan.io/address/{{ theme_config.social_ethereum }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Ethereum\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-ethereum\">
            <use href=\"{{url('theme://templates/icons/ethereum.svg')}}#icon-ethereum\" xlink:href=\"{{url('theme://templates/icons/ethereum.svg')}}#icon-ethereum\">
          {% include 'icons/ethereum.svg' %}
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_email %}
      <li>
        <a href=\"mailto:{{ theme_config.social_email }}\" title=\"Email\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-email\">
            <use href=\"{{url('theme://templates/icons/email.svg')}}#icon-email\" xlink:href=\"{{url('theme://templates/icons/email.svg')}}#icon-email\">
          {% include 'icons/email.svg' %}
        </a>
      </li>
    {% endif %}
    {% if theme_config.rss_enabled == true %}
      <li>
<a href=\"{{ base_url }}.rss\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"RSS\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-rss\">
            <use href=\"{{url('theme://templates/icons/rss.svg')}}#icon-rss\" xlink:href=\"{{url('theme://templates/icons/rss.svg')}}#icon-rss\">
          {% include 'icons/rss.svg' %}
        </a>
      </li>
    {% endif %}
  </ul>
   <p>
   {{ theme_config.footer_text | raw }}
  </p>
</footer>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\grav-admin-v1.7.43\\grav-admin\\user\\themes\\chalk\\templates\\partials\\footer.html.twig");
    }
}
