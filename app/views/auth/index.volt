{% if session.has('activeUser') %}
    Bienvenue {{ session.get('activeUser').getIdentite() }}
    <div align="right">{{ q["btDeconnexion"] }}</div>
{% else %}
    {{ q["btConnexion"] }} {% endif %}

{{ script_foot }}

