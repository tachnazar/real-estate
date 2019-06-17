function initSnippet () {
  var snippets = document.querySelectorAll('.snippet');
  [].forEach.call(snippets, function (snippet) {
    snippet.firstChild.insertAdjacentHTML('beforebegin', '<button class="btn btn-light btn-sm" data-clipboard-snippet title="Copy to clipboard"><i class="fa fa-copy"></i></button>');
  });
  $('[data-clipboard-snippet]').tooltip({
    'container': 'body'
  });
  var clipboardSnippets = new ClipboardJS('[data-clipboard-snippet]', {
    target: function (trigger) {
      return trigger.nextElementSibling;
    }
  });
  clipboardSnippets.on('success', function (e) {
    e.clearSelection();
  });
  clipboardSnippets.on('error', function (e) {
    console.log(e.action);
  });
}

$(document).ready(function () {
  initSnippet();
});