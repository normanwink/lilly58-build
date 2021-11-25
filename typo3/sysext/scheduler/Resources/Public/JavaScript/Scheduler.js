/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
var __importDefault=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};define(["require","exports","jquery","TYPO3/CMS/Backend/DocumentSaveActions","TYPO3/CMS/Core/Event/RegularEvent","TYPO3/CMS/Backend/Modal","TYPO3/CMS/Backend/Icons","TYPO3/CMS/Backend/Utility/MessageUtility","TYPO3/CMS/Backend/Storage/Persistent","tablesort"],(function(e,t,a,l,s,n,o,i,d){"use strict";a=__importDefault(a),s=__importDefault(s);class r{constructor(){this.actOnChangedTaskClass=e=>{let t=e.val();t=t.toLowerCase().replace(/\\/g,"-"),a.default(".extraFields").hide(),a.default(".extra_fields_"+t).show()},this.actOnChangedTaskType=e=>{this.toggleFieldsByTaskType(a.default(e.currentTarget).val())},this.actOnChangeSchedulerTableGarbageCollectionAllTables=e=>{let t=a.default("#task_tableGarbageCollection_numberOfDays"),l=a.default("#task_tableGarbageCollection_table");if(e.prop("checked"))l.prop("disabled",!0),t.prop("disabled",!0);else{let e=parseInt(t.val(),10);if(e<1){let t=l.val();void 0!==defaultNumberOfDays[t]&&(e=defaultNumberOfDays[t])}l.prop("disabled",!1),e>0&&t.prop("disabled",!1)}},this.actOnChangeSchedulerTableGarbageCollectionTable=e=>{let t=a.default("#task_tableGarbageCollection_numberOfDays");defaultNumberOfDays[e.val()]>0?(t.prop("disabled",!1),t.val(defaultNumberOfDays[e.val()])):(t.prop("disabled",!0),t.val(0))},this.toggleFieldsByTaskType=e=>{e=parseInt(e+"",10),a.default("#task_end_col").toggle(2===e),a.default("#task_frequency_row").toggle(2===e)},this.initializeEvents=()=>{a.default("#task_class").on("change",e=>{this.actOnChangedTaskClass(a.default(e.currentTarget))}),a.default("#task_type").on("change",this.actOnChangedTaskType),a.default("#task_tableGarbageCollection_allTables").on("change",e=>{this.actOnChangeSchedulerTableGarbageCollectionAllTables(a.default(e.currentTarget))}),a.default("#task_tableGarbageCollection_table").on("change",e=>{this.actOnChangeSchedulerTableGarbageCollectionTable(a.default(e.currentTarget))}),a.default("[data-update-task-frequency]").on("change",e=>{const t=a.default(e.currentTarget);a.default("#task_frequency").val(t.val()),t.val(t.attr("value")).trigger("blur")});const e=document.querySelector("table.taskGroup-table");null!==e&&new Tablesort(e),a.default(document).on("click",".t3js-element-browser",e=>{e.preventDefault();const t=e.currentTarget;n.advanced({type:n.types.iframe,content:t.href+"&mode="+t.dataset.mode+"&bparams="+t.dataset.params,size:n.sizes.large})}),new s.default("show.bs.collapse",this.toggleCollapseIcon).bindTo(document),new s.default("hide.bs.collapse",this.toggleCollapseIcon).bindTo(document),new s.default("multiRecordSelection:action:go",this.executeTasks).bindTo(document),new s.default("multiRecordSelection:action:go_cron",this.executeTasks).bindTo(document),window.addEventListener("message",this.listenOnElementBrowser)},this.initializeDefaultStates=()=>{let e=a.default("#task_type");e.length&&this.toggleFieldsByTaskType(e.val());let t=a.default("#task_class");t.length&&(this.actOnChangedTaskClass(t),r.updateElementBrowserTriggers())},this.listenOnElementBrowser=e=>{if(!i.MessageUtility.verifyOrigin(e.origin))throw"Denied message sent by "+e.origin;if("typo3:elementBrowser:elementAdded"===e.data.actionName){if(void 0===e.data.fieldName)throw"fieldName not defined in message";if(void 0===e.data.value)throw"value not defined in message";const t=e.data.value.split("_");document.querySelector('input[name="'+e.data.fieldName+'"]').value=t[1]}},this.initializeEvents(),this.initializeDefaultStates(),l.getInstance().addPreSubmitCallback(()=>{let e=a.default("#task_class").val();e=e.toLowerCase().replace(/\\/g,"-"),a.default(".extraFields").appendTo(a.default("#extraFieldsHidden")),a.default(".extra_fields_"+e).appendTo(a.default("#extraFieldsSection"))})}static updateElementBrowserTriggers(){document.querySelectorAll(".t3js-element-browser").forEach(e=>{const t=document.getElementById(e.dataset.triggerFor);e.dataset.params=t.name+"|||pages"})}static storeCollapseState(e,t){let l={};d.isset("moduleData.scheduler")&&(l=d.get("moduleData.scheduler"));const s={};s[e]=t?1:0,a.default.extend(l,s),d.set("moduleData.scheduler",l)}toggleCollapseIcon(e){const t="hide.bs.collapse"===e.type,l=document.querySelector('.t3js-toggle-table[data-bs-target="#'+e.target.id+'"] .collapseIcon');null!==l&&o.getIcon(t?"actions-view-list-expand":"actions-view-list-collapse",o.sizes.small).done(e=>{l.innerHTML=e}),r.storeCollapseState(a.default(e.target).data("table"),t)}executeTasks(e){const t=document.querySelector("#tx_scheduler_form");if(null===t)return;const a=[];if(e.detail.checkboxes.forEach(e=>{const t=e.closest("tr");null!==t&&t.dataset.taskId&&a.push(t.dataset.taskId)}),a.length){const l=document.createElement("input");if(l.setAttribute("type","hidden"),l.setAttribute("name","tx_scheduler[execute]"),l.setAttribute("value",a.join(",")),t.append(l),"multiRecordSelection:action:go_cron"===e.type){const e=document.createElement("input");e.setAttribute("type","hidden"),e.setAttribute("name","go_cron"),e.setAttribute("value","1"),t.append(e)}t.submit()}}}return new r}));