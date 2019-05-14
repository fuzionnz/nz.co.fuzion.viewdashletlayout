<div id="dashlet_{$block.id}"">
</div>
{literal}
<script>
CRM.$(function($) {
  var content_url = {/literal}"{$block.content_url}"{literal};
  var block_id = {/literal}"{$block.id}"{literal};
  CRM.loadPage(content_url, {target: $("#dashlet_" + block_id), dialog:false});
});
</script>
{/literal}