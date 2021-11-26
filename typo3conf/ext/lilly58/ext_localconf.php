<?php

// custom content elements
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'mod {
		wizards.newContentElement.wizardItems {
			common {
				elements {
          hero {
            iconIdentifier = content-image
            title = LLL:EXT:lilly58/Resources/Private/Language/locallang_db.xlf:ce.hero.title
            description = LLL:EXT:lilly58/Resources/Private/Language/locallang_db.xlf:ce.hero.description
            tt_content_defValues {
              CType = hero
            }
          }
				}

      	show := addToList(hero)
			}
		}
	}'
);

// BE layout
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'mod {
    web_layout {
			BackendLayouts {
				default {
					title = LLL:EXT:lilly58/Resources/Private/Language/locallang_db.xlf:layouts.default
					config {
						backend_layout {
							colCount = 1
							rowCount = 1
							rows {
								1 {
									columns {
										1 {
											name = LLL:EXT:lilly58/Resources/Private/Language/locallang_db.xlf:layouts.default
											colPos = 0
										}
									}
								}
							}
						}
					}
				}
				home {
					title = LLL:EXT:lilly58/Resources/Private/Language/locallang_db.xlf:layouts.home
					config {
						backend_layout {
							colCount = 0
							rowCount = 0
						}
					}
				}
			}
		}
	}'
);

// TCE form
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	TCEFORM {
		tt_content {
			CType {
				removeItems = header, bullets, textmedia, menu_abstract, menu_categorized_content, menu_categorized_pages, menu_subpages, menu_recently_updated, menu_related_pages, menu_section_pages, menu_sitemap_pages, menu_sitemap, menu_section, form_formframework
			}

			header_position {
				disabled = 1
			}

			date {
				disabled = 1
			}

			header_link {
				disabled = 1
			}

			imageorient {
				removeItems = 0,1,2,8,9,10,17,18
				default = 25

				types {
					image {
						disabled = 1
					}
				}
			}

			imagewidth {
				disabled = 1
			}

			imageheight {
				disabled = 1
			}

			imageborder {
				disabled = 1
			}

			imagecols {
				disabled = 1
			}

			image_zoom {
				disabled = 1
			}

			layout {
				altLabels {
					0 = Default (H2)
					1 = Indent Left
					2 = Indent Right
					3 = Indent Both
				}
			}

			frame_class {
				disabled = 1
			}

			sectionIndex {
				disabled = 1
			}

			linkToTop {
				disabled = 1
			}

			editlock {
				disabled = 1
			}

			fe_group {
				disabled = 1
			}

			header_layout {
				altLabels {
					0 = Default (H2)
					1 = H1
					2 = H2
					3 = H3
				}

				removeItems = 4,5
			}

			frame_class {
				removeItems = ruler-before,ruler-after,indent,indent-left,indent-right,none
			}

			space_before_class {
				removeItems = extra-small,medium,extra-large
			}

			space_after_class {
				removeItems = extra-small,medium,extra-large
			}
		}
	}
');

 ?>
