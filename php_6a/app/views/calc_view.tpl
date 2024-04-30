{extends file="main.tpl"}
{block name=content}

<div>
    <a href="{$conf->action_url}logout">Wyloguj</a>
    <span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>
<div>
    <form action="{$conf->action_url}calcCompute" method="POST">
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
        {include file="messages.tpl"}
        {if isset($result->result)}
            <h4>Wynik</h4>
            <p class="res">
                {$result->result}
            </p>
        {/if}
    </div>
</div>
{/block}
