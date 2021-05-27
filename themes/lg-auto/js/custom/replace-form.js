jQuery(document).ready(function(){

    jQuery('input[name="typeVehicule"]').change(function(){
        
        valueVehicle = jQuery(this).val()
        jQuery("#lieuInterventionForm option[value='Monopole Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='Prestige Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

        jQuery("#lieuInterventionForm option[value='Indian']").remove();

        console.log(valueVehicle);

        
        switch(valueVehicle){

            case 'Voitures':

                jQuery("#BrandsForm option[value='Fuso']").remove();

                jQuery("#BrandsForm option[value='Unimog']").remove();

                jQuery("#BrandsForm option[value='Yamaha']").remove();

                jQuery("#BrandsForm option[value='Indian']").remove();

                jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                jQuery("#BrandsForm option[value='smart']").remove();

                jQuery("#BrandsForm option[value='Jeep']").remove();

                jQuery("#BrandsForm option[value='Omniplus']").remove();

                jQuery("#BrandsForm").append(new Option("Mercedes-Benz", "Mercedes-Benz"));

                jQuery("#BrandsForm").append(new Option("smart", "smart"));

                jQuery("#BrandsForm").append(new Option("Jeep", "Jeep"));

                break;

            case 'Utilitaires':

                jQuery("#BrandsForm option[value='Fuso']").remove();

                jQuery("#BrandsForm option[value='Unimog']").remove();

                jQuery("#BrandsForm option[value='Yamaha']").remove();

                jQuery("#BrandsForm option[value='Indian']").remove();

                jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                jQuery("#BrandsForm option[value='smart']").remove();

                jQuery("#BrandsForm option[value='Jeep']").remove();

                jQuery("#BrandsForm option[value='Omniplus']").remove();

                jQuery("#BrandsForm").append(new Option("Mercedes-Benz", "Mercedes-Benz"));

                break;

            case 'Camions':

                jQuery("#BrandsForm option[value='Fuso']").remove();

                jQuery("#BrandsForm option[value='Unimog']").remove();

                jQuery("#BrandsForm option[value='Yamaha']").remove();

                jQuery("#BrandsForm option[value='Indian']").remove();

                jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                jQuery("#BrandsForm option[value='smart']").remove();

                jQuery("#BrandsForm option[value='Jeep']").remove();

                jQuery("#BrandsForm option[value='Omniplus']").remove();

                jQuery("#BrandsForm").append(new Option("Mercedes-Benz", "Mercedes-Benz"));

                jQuery("#BrandsForm").append(new Option("Fuso", "Fuso"));

                jQuery("#BrandsForm").append(new Option("Omniplus", "Omniplus"));

                jQuery("#BrandsForm").append(new Option("Unimog", "Unimog"));

                break;

            case 'Motos':

                jQuery("#BrandsForm option[value='Fuso']").remove();

                jQuery("#BrandsForm option[value='Unimog']").remove();

                jQuery("#BrandsForm option[value='Yamaha']").remove();

                jQuery("#BrandsForm option[value='Indian']").remove();

                jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                jQuery("#BrandsForm option[value='smart']").remove();

                jQuery("#BrandsForm option[value='Jeep']").remove();

                jQuery("#BrandsForm option[value='Omniplus']").remove();

                jQuery("#BrandsForm").append(new Option("Yamaha", "Yamaha"));

                jQuery("#BrandsForm").append(new Option("Indian", "Indian"));

                break;

            default : 

                alert(console.error());

                break;

        };

    });

    jQuery("select[name='marque']").change(function(){

        let valueMark = jQuery(this).val();

        switch(valueVehicle){

            case 'Voitures':

                if(valueMark === 'Jeep'){

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Prestige Automobile", "Prestige"));  

                } else if(valueMark === 'Mercedes-Benz'){

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("LG Albi Automobiles", "LG Albi Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Castres Automobiles", "LG Castres Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Muret Automobiles", "LG Muret Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Toulouse Automobiles", "LG Toulouse Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                }else{

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("LG Albi Automobiles", "LG Albi Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Muret Automobiles", "LG Muret Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Toulouse Automobiles", "LG Toulouse Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                }

                break;

            case 'Utilitaires':

                jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                jQuery("#lieuInterventionForm option[value='Indian']").remove();

                jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                jQuery("#lieuInterventionForm").append(new Option("LG Muret Automobiles", "LG Muret Automobiles"));

                jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                break;

            case 'Camions':

                jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                jQuery("#lieuInterventionForm option[value='Indian']").remove();

                jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                if(valueMark === 'Mercedes-Benz'){

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                } else if(valueMark === 'Fuso'){

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                } else if(valueMark === 'Omniplus'){

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                }else{

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                }



                break;

            case 'Motos':

                if(valueMark === 'Indian'){

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("Indian Perpignan", "Indian"));

                }

                else{

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("Yamaha Perpignan", "Yamaha"));  

                }

                break;

            default : 

                alert('error');

                break;

        };

    });
    jQuery('#demande-select').change(function(){

        valueChoise = jQuery(this).val();

        jQuery('.input-autres').removeClass('open');

        jQuery("#lieuInterventionForm option[value='Monopole']").remove();

        jQuery("#lieuInterventionForm option[value='Prestige']").remove();

        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

        jQuery("#lieuInterventionForm option[value='Indian']").remove();

        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

        jQuery("#BrandsForm option[value='Fuso']").remove();

        

        jQuery("#BrandsForm option[value='Unimog']").remove();

        jQuery("#BrandsForm option[value='Yamaha']").remove();

        jQuery("#BrandsForm option[value='Indian']").remove();

        jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

        jQuery("#BrandsForm option[value='smart']").remove();

        jQuery("#BrandsForm option[value='Jeep']").remove();

        switch(valueChoise){

            case 'autre':

                jQuery('.input-autres').addClass('open');

                jQuery("#Camion").attr('disabled', false);

                jQuery("#Choiseoccas").attr('disabled', false);

                jQuery(".container-type").removeClass('hidden');

                break;

            case 'location':

                jQuery("#Camion").attr('disabled', true);

                jQuery("#Choiseoccas").attr('disabled', true);

                break;

            default : 

                jQuery(".container-type").removeClass('hidden');

                jQuery("#Camion").attr('disabled', false);

                jQuery("#Choiseoccas").attr('disabled', false);

                break; 

        }

    });

    jQuery('.choise-vehicule').change(function(){

        valueVehicle = jQuery(this).val();

        jQuery("#lieuInterventionForm option[value='Monopole']").remove();

        jQuery("#lieuInterventionForm option[value='Prestige']").remove();

        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

        jQuery("#lieuInterventionForm option[value='Indian']").remove();

        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

        jQuery("#BrandsForm option[value='Fuso']").remove();

        

        jQuery("#BrandsForm option[value='Unimog']").remove();

        jQuery("#BrandsForm option[value='Yamaha']").remove();

        jQuery("#BrandsForm option[value='Indian']").remove();

        jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

        jQuery("#BrandsForm option[value='smart']").remove();

        jQuery("#BrandsForm option[value='Jeep']").remove();

        if( valueChoise === 'location' ){

            switch(valueVehicle){

                case 'Voitures':

                        jQuery("#BrandsForm option[value='Fuso']").remove();

                        

                        jQuery("#BrandsForm option[value='Unimog']").remove();

                        jQuery("#BrandsForm option[value='Yamaha']").remove();

                        jQuery("#BrandsForm option[value='Indian']").remove();

                        jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                        jQuery("#BrandsForm option[value='smart']").remove();

                        jQuery("#BrandsForm option[value='Jeep']").remove();

                        jQuery("#BrandsForm").append(new Option("Mercedes-Benz", "Mercedes-Benz"));

                        jQuery("#BrandsForm").append(new Option("smart", "smart"));

                    break;

                case 'Utilitaires':

                    jQuery("#BrandsForm option[value='Fuso']").remove();

                    

                    jQuery("#BrandsForm option[value='Unimog']").remove();

                    jQuery("#BrandsForm option[value='Yamaha']").remove();

                    jQuery("#BrandsForm option[value='Indian']").remove();

                    jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                    jQuery("#BrandsForm option[value='smart']").remove();

                    jQuery("#BrandsForm option[value='Jeep']").remove();

                    jQuery("#BrandsForm").append(new Option("Mercedes-Benz", "Mercedes-Benz"));

                    break;

                case 'Camions':

                    break;

                case 'Motos':

                    jQuery("#BrandsForm option[value='Fuso']").remove();

                    

                    jQuery("#BrandsForm option[value='Unimog']").remove();

                    jQuery("#BrandsForm option[value='Yamaha']").remove();

                    jQuery("#BrandsForm option[value='Indian']").remove();

                    jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                    jQuery("#BrandsForm option[value='smart']").remove();

                    jQuery("#BrandsForm option[value='Jeep']").remove();

                    jQuery("#BrandsForm").append(new Option("Yamaha", "Yamaha"));

                    break;

                default : 

                    alert('error');

                    break;

            };

        }

        else{

            switch(valueVehicle){

                case 'Voitures':

                        jQuery("#BrandsForm option[value='Fuso']").remove();

                        

                        jQuery("#BrandsForm option[value='Unimog']").remove();

                        jQuery("#BrandsForm option[value='Yamaha']").remove();

                        jQuery("#BrandsForm option[value='Indian']").remove();

                        jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                        jQuery("#BrandsForm option[value='smart']").remove();

                        jQuery("#BrandsForm option[value='Jeep']").remove();

                        jQuery("#BrandsForm").append(new Option("Mercedes-Benz", "Mercedes-Benz"));

                        jQuery("#BrandsForm").append(new Option("smart", "smart"));

                        jQuery("#BrandsForm").append(new Option("Jeep", "Jeep"));

                    break;

                case 'Utilitaires':

                    jQuery("#BrandsForm option[value='Fuso']").remove();

                    

                    jQuery("#BrandsForm option[value='Unimog']").remove();

                    jQuery("#BrandsForm option[value='Yamaha']").remove();

                    jQuery("#BrandsForm option[value='Indian']").remove();

                    jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                    jQuery("#BrandsForm option[value='smart']").remove();

                    jQuery("#BrandsForm option[value='Jeep']").remove();

                    jQuery("#BrandsForm").append(new Option("Mercedes-Benz", "Mercedes-Benz"));

                    break;

                case 'Camions':

                    jQuery("#BrandsForm option[value='Fuso']").remove();

                    

                    jQuery("#BrandsForm option[value='Unimog']").remove();

                    jQuery("#BrandsForm option[value='Yamaha']").remove();

                    jQuery("#BrandsForm option[value='Indian']").remove();

                    jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                    jQuery("#BrandsForm option[value='smart']").remove();

                    jQuery("#BrandsForm option[value='Jeep']").remove();

                    jQuery("#BrandsForm").append(new Option("Mercedes-Benz", "Mercedes-Benz"));

                    jQuery("#BrandsForm").append(new Option("Fuso", "Fuso"));

                    jQuery("#BrandsForm").append(new Option("Evobus", "evobus"));

                    jQuery("#BrandsForm").append(new Option("Unimog", "Unimog"));

                    break;

                case 'Motos':

                    jQuery("#BrandsForm option[value='Fuso']").remove();

                    

                    jQuery("#BrandsForm option[value='Unimog']").remove();

                    jQuery("#BrandsForm option[value='Yamaha']").remove();

                    jQuery("#BrandsForm option[value='Indian']").remove();

                    jQuery("#BrandsForm option[value='Mercedes-Benz']").remove();

                    jQuery("#BrandsForm option[value='smart']").remove();

                    jQuery("#BrandsForm option[value='Jeep']").remove();

                    jQuery("#BrandsForm").append(new Option("Yamaha", "Yamaha"));

                    jQuery("#BrandsForm").append(new Option("Indian", "Indian"));

                    break;

                default : 

                    alert('error');

                    break;

            };

        }

    });

    jQuery("#BrandsForm").change(function(){

        let valueMark = jQuery(this).val();

        if( valueChoise === 'location' ){

            switch(valueVehicle){

                case 'Voitures':

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Muret Automobiles", "LG Muret Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Toulouse Automobiles", "LG Toulouse Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                    break;

                case 'Utilitaires':

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Muret Automobiles", "LG Muret Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                    break;

                case 'Motos':

                        jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                        jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                        jQuery("#lieuInterventionForm option[value='Indian']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='Indian']").remove();

                        jQuery("#lieuInterventionForm").append(new Option("Yamaha Perpignan", "Yamaha"));  

                    break;

                default : 

                    alert('error');

                    break;

            };

        }

        else{

            switch(valueVehicle){

                case 'Voitures':

                    if(valueMark === 'Jeep'){

                        jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                        jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                        jQuery("#lieuInterventionForm option[value='Indian']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                        jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("Prestige Automobile", "Prestige"));  

                    } else if(valueMark === 'smart'){

                        jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                        jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                        jQuery("#lieuInterventionForm option[value='Indian']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                        jQuery("#lieuInterventionForm").append(new Option("LG Albi Automobiles", "LG Albi Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Muret Automobiles", "LG Muret Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Toulouse Automobiles", "LG Toulouse Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                    }else{

                        jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                        jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                        jQuery("#lieuInterventionForm option[value='Indian']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                        jQuery("#lieuInterventionForm").append(new Option("LG Albi Automobiles", "LG Albi Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Castres Automobiles", "LG Castres Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Muret Automobiles", "LG Muret Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("LG Toulouse Automobiles", "LG Toulouse Automobiles"));

                        jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                    }

                    break;

                case 'Utilitaires':

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Muret Automobiles", "LG Muret Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                    break;

                case 'Camions':

                    jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                    jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                    jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                    jQuery("#lieuInterventionForm option[value='Indian']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                    jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                    jQuery("#lieuInterventionForm").append(new Option("LG Beziers Automobiles", "LG Béziers Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Carcassonne Automobiles", "LG Carcassonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("LG Narbonne Automobiles", "LG Narbonne Automobiles"));

                    jQuery("#lieuInterventionForm").append(new Option("Monopole Automobiles", "Monopole"));

                    break;

                case 'Motos':

                    if(valueMark === 'Indian'){

                        jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                        jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                        jQuery("#lieuInterventionForm option[value='Indian']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                        jQuery("#lieuInterventionForm").append(new Option("Indian Perpignan", "Indian"));

                    }

                    else{

                        jQuery("#lieuInterventionForm option[value='Monopole']").remove();

                        jQuery("#lieuInterventionForm option[value='Prestige']").remove();

                        jQuery("#lieuInterventionForm option[value='Yamaha']").remove();

                        jQuery("#lieuInterventionForm option[value='Indian']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Narbonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Carcassonne Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Béziers Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Toulouse Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Muret Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Castres Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='LG Albi Automobiles']").remove();

                        jQuery("#lieuInterventionForm option[value='Indian']").remove();

                        jQuery("#lieuInterventionForm").append(new Option("Yamaha Perpignan", "Yamaha"));  

                    }

                    break;

                default : 

                    alert('error');

                    break;

            };

        }

    });

})