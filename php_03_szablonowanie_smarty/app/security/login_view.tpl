{extends file="../../templates/main.tpl"}
{block name=content}
    <div>
        <form action="{$app_root}/app/security/login.php" method="POST">
            <legend>Logowanie</legend>
            <fieldset>
                <label for="id_login">login: </label>
                <input id="id_login" type="text" name="login" value="{$form['login']}"/>
                <label for="id_pass">pass: </label>
                <input id="id_pass" type="password" name="pass" />
            </fieldset>
            <input type="submit" value="zaloguj"/>
        </form>

        {if isset($messages)}
            {if count ( $messages ) > 0}
                <ol>
                    {foreach $messages as $key => $msg}
                        {strip}
                            <li>{$msg}</li>
                        {/strip}
                    {/foreach}
                </ol>
            {/if}
        {/if}
    </div>
{/block}