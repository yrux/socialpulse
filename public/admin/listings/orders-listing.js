const tablename='orders';const ydebugger=false; var ytabled;
 //var _imageCol = tablename+'_image';
/*When you want to use FAST CRUD of ytable and you have used joins in the listing use 
type:'ignore' 
in columns which are being shown by the join and not the part of , 

if column type is callback and typeData should be a function..
otherwise you can use typeData with dropdowns 

_default will set a default value for new records
*/
(async () => {
    /*turn below line on and pass flag type in the function it'll fetch latest dropdown automatically
    it'll load page a bit late but it works fine for dropdowns
    */
    //var TYPEDATA = await getFlagDropdown('FLAGTYPE');
    ytabled = new ytable(tablename,[
        {
            column:'id',
            name:'ID',
            type:'hidden',
        }
        // ,{
        //     column:'field_slug',
        //     name:'Slug',
        //     type:'slug',
        //     slugof:'field_name',
        //     hiddenInList:true,
        // }
        ,{
            column:'first_name',
            name:'First Name',
            type:'text',
        }
        ,{
            column:'last_name',
            name:'Last Name',
            type:'text',
        }
        ,{
            column:'email',
            name:'Email',
            type:'text',
        }
        ,{
            column:'order_status',
            name:'Status',
            type:'text',
        }
        ,{
            column:'total_products',
            name:'Products',
            type:'text',
        }
        ,{
            column:'total',
            name:'Total',
            type:'text',
        }
    ],
    [
         //{ "left join" : "(select id as img_id,ref_id,table_name as img_tblename,img_path as "+_imageCol+" from imagetable where imagetable.table_name='"+tablename+"' and imagetable.type='1') as imagetable on  imagetable.ref_id="+tablename+".id" } ,
         //{ "left join" : "(select id as img_id_thumb,ref_id as thumb_ref_id,table_name as img_tblename_thumb,img_path as table_thumb_image from imagetable where imagetable.table_name='table_thumb' and imagetable.type='1') as imagetable_thumb on  imagetable_thumb.thumb_ref_id=table.id" } ,
    ],
    [
        '<button data-toggle="tooltip" onclick="gotoInvoice(this)" class="btn btn-outline-info btn--icon" data-placement="top" title="" data-original-title="View Invoice" ><i class="zmdi zmdi-eye zmdi-hc-fw"></i></button>',
    ],'.ytable',{
        "where":{
            "is_active":"IN('0','1')",
            //"is_active":"='1'",
            "and":[
                {
                    col:"is_deleted",
                    condition:"=",
                    value:"0",
                }
                // ,{
                //     col:"user_id",
                //     condition:"=",
                //     value:document.getElementById('loggedinid').value,
                // }
            ],
            /*"or":[
                {
                    col:"is_deleted",
                    condition:"=",
                    value:"'0'",
                },
                {
                    col:"user_id",
                    condition:"=",
                    value:document.getElementById('loggedinid').value,
                }
            ]*/
        },
        "order by" : "id desc",
        // "group by" : "table.id",
    },ydebugger);
    //ytabled.uniqueCol = 'table_id';
    ytabled.autoCallbacksonBuild.push('turnOnDblClickCopyyTable');
window.addEventListener('ytable_beforeRow', function (e) {
    //console.log(e.detail);
    //var olddata = ytabled.currentData[e.detail.dataIndex].id;
    //ytabled.currentData[e.detail.dataIndex].id = '<a href="javscript:void(0)">'+olddata+'</a>';
});
window.addEventListener('ytable_afterRow', function (e) {
    //console.log(e.detail);
    /*here you will get the unique index of every row added in the ytable*/
    $('[data-toggle="tooltip"]').tooltip();
});
window.addEventListener('ytable_columnAdded_{columnName}', function (e) {
    /*Here you get specific column event only you can defnie events like 
        ytable_columnAdded_id
        ytable_columnAdded_name
        ytable_columnAdded_email
        ytable_columnAdded_updatedAt

    and then update only on those specific columns , this event will fire whenever the column is added in ytable
    */
    //console.log(e.detail);
    //ytabled.currentData[e.detail.dataIndex].id = 'TESTING UPDATE';
});
window.addEventListener('fastCrudSuccess', function (e) {
    /*Fires after you update/create record and that record is successfully updated/created 
    e.datail = response
    */
});
window.addEventListener('fastCrudFailed', function (e) {
    /*Fires after you try to update/create record and it fails either in validation or for some other reasons 
    e.datail = response
    */
});
window.addEventListener('fastCrudFromRendered', function (e) {
    /*Fires after your popup form has been rendered , if you want any function to work or event to bind
    on any input, from here you can do that...
    e.detail have the data of a row you've selected to edit, 
    if you've created a new record e.detail will be undefined
    console.log(e.detail);
    */
});
// enableFastCrud();
$('.ytable-addrecord').hide();
})();

var enableFastCrud = ()=>{
    document.getElementsByClassName('ytable-addrecord')[0].addEventListener('click',(e)=>{
        $('#ytable-FastCRUD').modal('toggle');
        document.getElementById('ytable_table').value=tablename;
        document.getElementById('unique_column').value=ytabled.uniqueCol;
        fastCRUDForm(ytabled);
    })
}
// function createAnchor(col,value){
//     _src = img_url(value);
//     return '<a href="'+_src+'" target="_blank" data-toggle="tooltip" title="Preview/Download File" class="btn btn-dark btn--icon-text"><i class="zmdi zmdi-eye"></i> File</a>';
// }
function gotoInvoice(obj){
    var id = $(obj).parent().parent().data('ytablerowid')
    window.location.href=base_url(`checkout/invoice/`+id)
}