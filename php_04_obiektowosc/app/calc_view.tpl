{extends file=$conf->root_path|cat:"/templates/main.tpl"}{*cat dopisz do ścieżki - z szablonowania SMARTY*}
{block name=content}
{*<div class="log_out">
	<a href="{$app_url}/app/security/logout.php">Wyloguj</a>
</div>*}

<div>
    <form action="{$conf->app_url}/app/calc.php" method="POST">
        <fieldset>
            <label for="id1">Kwota kredytu: </label>
            <input id="id1" type="text" name="credit" value="{$form->credit}"/><br />
            <label for="id2">Ilość lat: </label>
            <input id="id2" type="text" name="years" value="{$form->years}"/><br />
            <label for="id3">Oprocentowanie (%):</label>
            <input id="id3" type="text" name="interestRate" value="{$form->interestRate}"/><br />
            <input type="submit" value="Oblicz ratę"/>
        </fieldset>
    </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <div class="pure-table pure-table-horizontal">
        {if $msgs->isError()}
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                {foreach $msgs->getErrors() as $err}
                    {strip}
                        <li>{$err}</li>
                    {/strip}
                {/foreach}
            </ol>
        {/if}

        {if $msgs->isInfo()}
            <h4>Informacje: </h4>
            <ol class="inf">
                {foreach $msgs->getInfos() as $inf}
                    {strip}
                        <li>{$inf}</li>
                    {/strip}
                {/foreach}
            </ol>
        {/if}

        {if isset($result->result)}
            <h4>Wynik</h4>
            <p class="res">
                {$result->result}
            </p>
        {/if}
    </div>
</div>
{/block}
