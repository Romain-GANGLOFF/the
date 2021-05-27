<section id="TabsContainer">
    <div class="tabs">
        <div class="tab">
            <input type="checkbox" id="chck1">
            <label for="chck1" class="tab-label"><?= __("Service Après-Vente") ?></label>
            <div class="tab-content">
                <?= do_shortcode('[contact-form-7 id="5" title="Service Après-Vente"]') ?>
            </div>
        </div>
        <div class="tab">
            <input type="checkbox" id="chck2">
            <label for="chck2" class="tab-label"><?= __("Un nouveau projet ?") ?></label>
            <div class="tab-content">
                <?= do_shortcode('[contact-form-7 id="662" title="Un nouveau projet"]') ?>
            </div>
        </div>
        <div class="tab">
            <input type="checkbox" id="chck3">
            <label for="chck3" class="tab-label"><?= __("Vos questions") ?></label>
            <div class="tab-content">
                <?= do_shortcode('[contact-form-7 id="663" title="Vos questions"]') ?>
            </div>
        </div>
    </div>
</section>
<script>

    jQuery("input[name='typeVehicule']").each(function(index){
        let variable = jQuery(this).val()
        jQuery(this).attr("id", variable);
        jQuery(this).css("display","none")
        jQuery(this).next().css("display","none")
        jQuery(this).after("<label for="+ variable +">"+ variable + "</label>");
    })
    jQuery("input[name='typeDemande']").each(function(index){
        let variable = jQuery(this).val();
        let variableWithoutSpace = variable.replace(/\s/g, "");
        jQuery(this).css("display","none");
        jQuery(this).attr("id", variableWithoutSpace);
        jQuery(this).next().css("display","none");
        jQuery(this).after("<label for="+ variableWithoutSpace +">"+variable+"</label>");
    })
    jQuery("input[name='magasin']").each(function(index){
        let variable = jQuery(this).val();
        let variableWithoutSpace = variable.replace(/\s/g, "");
        jQuery(this).css("display","none");
        jQuery(this).attr("id", variableWithoutSpace);
        jQuery(this).next().css("display","none");
        jQuery(this).after("<label for="+ variableWithoutSpace +">"+variable+"</label>");
    })
    jQuery("input[name='DesiredVehicule']").each(function(index){
        let variable = jQuery(this).val();
        let variableWithoutSpace = variable.replace(/\s/g, "");
        jQuery(this).css("display","none");
        jQuery(this).attr("id", variableWithoutSpace);
        jQuery(this).next().css("display","none");
        jQuery(this).after("<label for="+ variableWithoutSpace +">"+variable+"</label>");
    })
    jQuery("select[name='TypeProject']").change(function(){
        let val = jQuery(this).val()
        let camions = jQuery("input#Camions")
        if(val == "Service location rent"){
            camions.attr("disabled", true)
        } else{
            camions.attr("disabled", false)
        }
    })
    jQuery("input[name='fichier']").change(function(event){
        jQuery(".label-fileform").html(event.target.files[0].name)
    })
</script>