{if $msgs->isError()}
    <div class="messages error">
        <ol>
            {foreach $msgs->getErrors() as $error}
                {strip}
                    <li>{$error}</li>
                {/strip}
            {/foreach}
        </ol>
    </div>
{/if}
{if $msgs->isInfo()}
<div class="messages inf bottom-margin">
        <ol>
            {foreach $msgs->getInfos() as $infos}
                {strip}
                    <li>{$infos}</li>
                {/strip}
            {/foreach}
        </ol>
    </div>
{/if}