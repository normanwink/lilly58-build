page = PAGE
page {
	config {
		noPageTitle = 2
	}

	typeNum = 0

	# bodyTag >
	# bodyTagCObject = TEXT
	# bodyTagCObject.stdWrap.dataWrap = <body class="layout{field:backend_layout}" id="uid{field:uid}">

	10 = FLUIDTEMPLATE
	10 {
		format = html

		partialRootPaths {
			5 = {$resources}/Private/Overrides/fluid_styled_content/Partials
			10 = {$resources}/Private/Page/Partials/
		}

		layoutRootPaths {
			10 = {$resources}/Private/Page/Layouts/
		}

		templateRootPaths {
			10 = {$resources}/Private/Page/Templates/
		}

		dataProcessing {
      10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
      10 {
        special = directory
        special.value = 1
        levels = 6
        includeSpacer = 1
        as = mainmenu
      }
    }

		templateName {
			cObject = TEXT
			cObject {
				data = pagelayout
				required = 1
				case = uppercamelcase

				split {
					token = pagets__
					cObjNum = 1
					1.current = 1
				}
			}

			ifEmpty = Default
		}

		variables {
			content < styles.content.get
			content.select.where = colPos = 0
		 }
	}

	includeCSS {
		main = {$resources}/Public/Css/style.css
		main.media = all
	}

	includeJS {
		# tns = {$resources}/Public/Vendor/tiny-slider/min/tiny-slider.js
		# helpers = {$resources}/Public/Js/helpers.js
	}

	includeJSFooter {
		main = {$resources}/Public/Js/script.js
		main.async = 1
	}
}

lib.contentElement {
	templateRootPaths.5 = {$resources}/Private/Overrides/fluid_styled_content/Templates/
	partialRootPaths.5 = {$resources}/Private/Overrides/fluid_styled_content/Partials/
	layoutRootPaths.5 = {$resources}/Private/Overrides/fluid_styled_content/Layouts/
}

tt_content {
  hero =< lib.contentElement
	hero {
		templateName = Hero

		dataProcessing {
			10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
			10 {
				references {
					fieldName = image
				}
				as = image
			}
		}
	}

  prevnext =< lib.contentElement
	prevnext {
		templateName = Prevnext

		dataProcessing {
      10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
      10 {
        special = list
        special.value.field = tx_mechkey_prevpage
				as = prevpage
      }

      20 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
      20 {
        special = list
        special.value.field = tx_mechkey_nextpage
				as = nextpage
      }
    }
	}
}
