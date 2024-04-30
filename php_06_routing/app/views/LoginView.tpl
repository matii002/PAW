{extends file="main.tpl"}
{block name=content}
<form action="{$conf->action_url}login" method="POST">
        <fieldset>
            <label for="id_login">login: </label>
            <input id="id_login" type="text" name="login"/><br />

            <label for="id_pass">hasło: </label>
            <input id="id_pass" type="password" name="pass"/><br />
            <input type="submit" value="zaloguj"/>
        </fieldset>
</form>
{include file = 'messages.tpl'}
{/block}