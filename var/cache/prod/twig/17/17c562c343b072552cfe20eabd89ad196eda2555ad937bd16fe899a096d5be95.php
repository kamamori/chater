<?php

/* default/test.html.twig */
class __TwigTemplate_f036e632b705b6e065731e1e15a571b4fe242f0a4c51861eb8443df5fd804686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c81f2744901005f4e0be1c1650f23047939a3f3b5e2316821cefe43c836bc351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81f2744901005f4e0be1c1650f23047939a3f3b5e2316821cefe43c836bc351->enter($__internal_c81f2744901005f4e0be1c1650f23047939a3f3b5e2316821cefe43c836bc351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/test.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c81f2744901005f4e0be1c1650f23047939a3f3b5e2316821cefe43c836bc351->leave($__internal_c81f2744901005f4e0be1c1650f23047939a3f3b5e2316821cefe43c836bc351_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4d4add31dc2a164aec2fa806fa15b47735fced6864bf5f16988378c4a00dbbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4add31dc2a164aec2fa806fa15b47735fced6864bf5f16988378c4a00dbbc3->enter($__internal_4d4add31dc2a164aec2fa806fa15b47735fced6864bf5f16988378c4a00dbbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "   
<h1>Public chat</h1>
<ul id=\"chat-list\"></ul>
<hr>
<textarea id=\"form-message\" placeholder=\"Your public message here\"></textarea>
<input type=\"button\" id=\"form-submit\" value=\"Send message\"/>

<script>
    // This object will be sent everytime you submit a message in the sendMessage function.
    var clientInformation = {
        username: new Date().getTime().toString()
        // You can add more information in a static object
    };
    
    // START SOCKET CONFIG
    /**
     * Note that you need to change the \"sandbox\" for the URL of your project. 
     * According to the configuration in Sockets/Chat.php , change the port if you need to.
     * @type WebSocket
     */
    var conn = new WebSocket('ws://App:8080');

    conn.onopen = function(e) {
        console.info(\"Connection established succesfully\");
    };

    conn.onmessage = function(e) {
        var data = JSON.parse(e.data);
        Chat.appendMessage(data.username, data.message);
        
        console.log(data);
    };
    
    conn.onerror = function(e){
        alert(\"Error: something went wrong with the socket.\");
        console.error(e);
    };
    // END SOCKET CONFIG
   
    
    /// Some code to add the messages to the list element and the message submit.
    document.getElementById(\"form-submit\").addEventListener(\"click\",function(){
        var msg = document.getElementById(\"form-message\").value;
        
        if(!msg){
            alert(\"Please send something on the chat\");
        }
        
        Chat.sendMessage(msg);
        // Empty text area
        document.getElementById(\"form-message\").value = \"\";
    }, false);
    
    // Mini API to send a message with the socket and append a message in a UL element.
    var Chat = {
        appendMessage: function(username,message){
            var from;
            
            if(username == clientInformation.username){
                from = \"me\";
            }else{
                from = clientInformation.username;
            }
            
            // Append List Item
            var ul = document.getElementById(\"chat-list\");
            var li = document.createElement(\"li\");
            li.appendChild(document.createTextNode(from + \" : \"+ message));
            ul.appendChild(li);
        },
        sendMessage: function(text){
            clientInformation.message = text;
            // Send info as JSON
            conn.send(JSON.stringify(clientInformation));
            // Add my own message to the list
            this.appendMessage(clientInformation.username, clientInformation.message);
        }
    };
</script>
";
        
        $__internal_4d4add31dc2a164aec2fa806fa15b47735fced6864bf5f16988378c4a00dbbc3->leave($__internal_4d4add31dc2a164aec2fa806fa15b47735fced6864bf5f16988378c4a00dbbc3_prof);

    }

    public function getTemplateName()
    {
        return "default/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block body %}
   
<h1>Public chat</h1>
<ul id=\"chat-list\"></ul>
<hr>
<textarea id=\"form-message\" placeholder=\"Your public message here\"></textarea>
<input type=\"button\" id=\"form-submit\" value=\"Send message\"/>

<script>
    // This object will be sent everytime you submit a message in the sendMessage function.
    var clientInformation = {
        username: new Date().getTime().toString()
        // You can add more information in a static object
    };
    
    // START SOCKET CONFIG
    /**
     * Note that you need to change the \"sandbox\" for the URL of your project. 
     * According to the configuration in Sockets/Chat.php , change the port if you need to.
     * @type WebSocket
     */
    var conn = new WebSocket('ws://App:8080');

    conn.onopen = function(e) {
        console.info(\"Connection established succesfully\");
    };

    conn.onmessage = function(e) {
        var data = JSON.parse(e.data);
        Chat.appendMessage(data.username, data.message);
        
        console.log(data);
    };
    
    conn.onerror = function(e){
        alert(\"Error: something went wrong with the socket.\");
        console.error(e);
    };
    // END SOCKET CONFIG
   
    
    /// Some code to add the messages to the list element and the message submit.
    document.getElementById(\"form-submit\").addEventListener(\"click\",function(){
        var msg = document.getElementById(\"form-message\").value;
        
        if(!msg){
            alert(\"Please send something on the chat\");
        }
        
        Chat.sendMessage(msg);
        // Empty text area
        document.getElementById(\"form-message\").value = \"\";
    }, false);
    
    // Mini API to send a message with the socket and append a message in a UL element.
    var Chat = {
        appendMessage: function(username,message){
            var from;
            
            if(username == clientInformation.username){
                from = \"me\";
            }else{
                from = clientInformation.username;
            }
            
            // Append List Item
            var ul = document.getElementById(\"chat-list\");
            var li = document.createElement(\"li\");
            li.appendChild(document.createTextNode(from + \" : \"+ message));
            ul.appendChild(li);
        },
        sendMessage: function(text){
            clientInformation.message = text;
            // Send info as JSON
            conn.send(JSON.stringify(clientInformation));
            // Add my own message to the list
            this.appendMessage(clientInformation.username, clientInformation.message);
        }
    };
</script>
{% endblock %}
", "default/test.html.twig", "/home/ubuntu/workspace/app/Resources/views/default/test.html.twig");
    }
}
