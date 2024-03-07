tinymce.init({
  selector: "textarea.tinymce",
  plugins: [
    "file-manager",
    "code",
    "advlist",
    "autolink",
    "lists",
    "checklist",
    "link",
    "image",
    "charmap",
    "preview",
    "anchor",
    "searchreplace",
    "visualblocks",
    "fullscreen",
    "insertdatetime",
    "media",
    "table",
    "editimage",
    "wordcount",
    "mediaembed",
    "casechange",
    "export",
    "pagebreak",
    "emoticons",
    "directionality",
    "powerpaste",
    "tableofcontents",
    "wordcount",
    "permanentpen",
    "export",
  ],
  toolbar:
    "fullscreen | undo redo | bold italic underline strikethrough hr | alignleft aligncenter alignright alignjustify outdent indent | bullist numlist checklist | image code link media | forecolor backcolor | subscript superscript | table tableinsertdialog tablecellprops advtablerownumbering tableofcontents permanentpen export emoticons charmap | styles fontfamily fontsize | upload flmngr imgPen imagepreview2 imagegallery2",
  powerpaste_allow_local_images: true,
  powerpaste_word_import: "prompt",
  powerpaste_html_import: "prompt",
  height: 500,
  width: 1000,
  menu: {
    file: {
      title: "File",
      items:
        "newdocument restoredraft | preview | export print | deleteallconversations",
    },
    edit: {
      title: "Edit",
      items: "undo redo | cut copy paste pastetext | selectall | searchreplace",
    },
    view: {
      title: "View",
      items:
        "code | visualaid visualchars visualblocks | spellchecker | preview fullscreen | showcomments",
    },
    insert: {
      title: "Insert",
      items:
        "image link media addcomment pageembed template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor tableofcontents | insertdatetime",
    },
    format: {
      title: "Format",
      items:
        "checklist | bold italic underline strikethrough superscript subscript codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat",
    },
    tools: {
      title: "Tools",
      items: "spellchecker spellcheckerlanguage | a11ycheck code wordcount",
    },
    table: {
      title: "Table",
      items:
        "inserttable | cell row column | advtablesort | tableprops deletetable",
    },
    help: {
      title: "Help",
      items: "help",
    },
  },
  content_style:
    "body { font-family:Helvetica,Arial,sans-serif; font-size:16px }",
  ui: {
    useAutoToolbar: false,
  },
  Flmngr: {
    apiKey: "FLMNFLMN", // default free key
  },
});
