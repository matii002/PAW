{extends file="../templates/main.tpl"}
{block name=content}
<div class="log_out">
	<a href="{$app_url}/app/security/logout.php">Wyloguj</a>
</div>

<div>
    <form action="{$app_root}/app/calc.php" method="POST">
        <fieldset>
            <label for="id1">Kwota kredytu: </label>
            <input id="id1" type="text" name="credit" value="{$form['credit']}"/><br />
            <label for="id2">Ilość lat: </label>
            <input id="id2" type="text" name="years" value="{$form['years']}"/><br />
            <label for="id3">Oprocentowanie (%):</label>
            <input id="id3" type="text" name="interestRate" value="{$form['interestRate']}"/><br />
            <input type="submit" value="Oblicz ratę"/>
        </fieldset>
    </form>

    {if isset($messages)}
        {if count($messages) > 0}
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                {foreach  $messages as $msg}
                    {strip}
                        <li>{$msg}</li>
                    {/strip}
                {/foreach}
            </ol>
        {/if}
    {/if}

    {if isset($infos)}
        {if count($infos) > 0}
            <h4>Informacje: </h4>
            <ol class="inf">
                {foreach  $infos as $msg}
                    {strip}
                        <li>{$msg}</li>
                    {/strip}
                {/foreach}
            </ol>
        {/if}
    {/if}

    {if isset($result)}
        <h4>Wynik</h4>
        <p class="res">
            {$result}
        </p>
    {/if}

</div>
{/block}
