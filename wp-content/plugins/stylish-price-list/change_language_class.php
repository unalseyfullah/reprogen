<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
class convert_lang { 

    public function convert_lang_function($lang,$keyword){
        $language=array();
        
        $language['EN']['Select_Language']                        = remove_slash_quotes("Select Language");
        $language['EN']['Select_Column']                          = remove_slash_quotes("Select Column");
        $language['EN']['Max_Width']                              = remove_slash_quotes("Max Width");
        $language['EN']['Save']                                   = remove_slash_quotes("Save");
        $language['EN']['Price_List_Name']                        = remove_slash_quotes("Price List Name");
        $language['EN']['Select_Style']                           = remove_slash_quotes("Select Style");
        $language['EN']['More_Settings']                          = remove_slash_quotes("More Settings");
        $language['EN']['Default_Tab']                            = remove_slash_quotes("Default Tab");
        $language['EN']['Change_All_word_for_Categories']         = remove_slash_quotes('Change "All" word for Categories');
        $language['EN']['different_languages']                    = remove_slash_quotes("different languages");
        $language['EN']['Display_the_All_word']                   = remove_slash_quotes('Display the "All" word?');
        $language['EN']['Category_Separator_Symbol']              = remove_slash_quotes("Category Separator Symbol");
        $language['EN']['Stylish_Category_Tabs_Buttons']          = remove_slash_quotes("Stylish Category Tabs Buttons");
        $language['EN']['Break_title_of_Service']                 = remove_slash_quotes("Break title of Service");
        $language['EN']['Break_line_of_categories_on_Desktop']    = remove_slash_quotes("Break line of categories on Desktop");
        $language['EN']['Break_line_of_categories_on_Tablets']    = remove_slash_quotes("Break line of categories on Tablets");
        $language['EN']['Price_List_Description']                 = remove_slash_quotes("Price List Description");
        $language['EN']['Title']                                  = remove_slash_quotes("Title");
        $language['EN']['Category_Tabs']                          = remove_slash_quotes("Category (Tabs)");
        $language['EN']['Service_Name']                           = remove_slash_quotes("Service Name");
        $language['EN']['Service_Price']                          = remove_slash_quotes("Service Price");
        $language['EN']['Service_Description']                    = remove_slash_quotes("Service Description");
        $language['EN']['Font_Size']                              = remove_slash_quotes("Font Size");
        $language['EN']['Font_Color']                             = remove_slash_quotes("Font Color");
        $language['EN']['Font_Style']                             = remove_slash_quotes("Font Style");
        $language['EN']['Hover_Color']                            = remove_slash_quotes("Hover Color");
        $language['EN']['Category_Name']                          = remove_slash_quotes("Category Name");
        $language['EN']['Category_Description']                   = remove_slash_quotes("Category Description");
        $language['EN']['Service_Name']                           = remove_slash_quotes("Service Name");
        $language['EN']['Service_Price']                          = remove_slash_quotes("Service Price");
        $language['EN']['Service_Description']                    = remove_slash_quotes("Service Description");
        $language['EN']['Service_Description_Length']             = remove_slash_quotes("Service Description");
        $language['EN']['Service_Button']                         = remove_slash_quotes("Service Button");
        $language['EN']['Service_Button_URL']                         = remove_slash_quotes("Service Button URL");
        $language['EN']['Service_URL']                            = remove_slash_quotes("Service URL");
        $language['EN']['Remove_Service']                         = remove_slash_quotes("Remove Service");
        $language['EN']['Add_Service']                            = remove_slash_quotes("Add Service");
        $language['EN']['Add_Category']                           = remove_slash_quotes("+ Add Category");
        $language['EN']['Remove_Category']                        = remove_slash_quotes("Remove Category");
        $language['EN']['Restore']                                = remove_slash_quotes("Restore");
        $language['EN']['Backup']                                 = remove_slash_quotes("Backup");
        $language['EN']['Preview_List']                           = remove_slash_quotes("Preview List");
        $language['EN']['CATEGORY']                               = remove_slash_quotes("CATEGORY");
        $language['EN']['FONT_SETTINGS']                          = remove_slash_quotes("FONT SETTINGS");
        $language['EN']['ADD_TO_WEBPAGE']                         = remove_slash_quotes("ADD TO WEBPAGE");
        
        //Spanish
        
        $language['SP']['Select_Language']                        = remove_slash_quotes("Seleccione el idioma");
        $language['SP']['Select_Column']                          = remove_slash_quotes("Seleccionar columna");
        $language['SP']['Max_Width']                              = remove_slash_quotes("Anchura máxima");
        $language['SP']['Save']                                   = remove_slash_quotes("Salvar");
        $language['SP']['Price_List_Name']                        = remove_slash_quotes("Nombre de lista de precios");
        $language['SP']['Select_Style']                           = remove_slash_quotes("Seleccionar estilo");
        $language['SP']['More_Settings']                          = remove_slash_quotes("Más ajustes");
        $language['SP']['Default_Tab']                            = remove_slash_quotes("Ficha predeterminada");
        $language['SP']['Change_All_word_for_Categories']         = remove_slash_quotes('Cambiar la palabra "Todos" por Categorías');
        $language['SP']['different_languages']                    = remove_slash_quotes("idiomas diferentes");
        $language['SP']['Display_the_All_word']                   = remove_slash_quotes('Mostrar la palabra "Todos"?');
        $language['SP']['Category_Separator_Symbol']              = remove_slash_quotes("Categoría Símbolo de separador");
        $language['SP']['Stylish_Category_Tabs_Buttons']          = remove_slash_quotes("Elegantes lengüetas de categoría botones");
        $language['SP']['Break_title_of_Service']                 = remove_slash_quotes("Título de rotura del servicio");
        $language['SP']['Break_line_of_categories_on_Desktop']    = remove_slash_quotes("Romper la línea de categorías en el escritorio");
        $language['SP']['Break_line_of_categories_on_Tablets']    = remove_slash_quotes("Romper la línea de categorías en Tabletas");
        $language['SP']['Price_List_Description']                 = remove_slash_quotes("Descripción de la lista de precios");
        $language['SP']['Title']                                  = remove_slash_quotes("Título");
        $language['SP']['Category_Tabs']                          = remove_slash_quotes("Categoría (pestañas)");
        $language['SP']['Service_Name']                           = remove_slash_quotes("Nombre del Servicio");
        $language['SP']['Service_Price']                          = remove_slash_quotes("Precio del servicio");
        $language['SP']['Service_Description']                    = remove_slash_quotes("Descripción del servicio");
        $language['SP']['Font_Size']                              = remove_slash_quotes("Tamaño de fuente");
        $language['SP']['Font_Color']                             = remove_slash_quotes("Color de fuente");
        $language['SP']['Font_Style']                             = remove_slash_quotes("Estilo de fuente");
        $language['SP']['Hover_Color']                            = remove_slash_quotes("Color de libración");
        $language['SP']['Category_Name']                          = remove_slash_quotes("nombre de la categoría");
        $language['SP']['Category_Description']                   = remove_slash_quotes("Descripción de categoría");
        $language['SP']['Service_Name']                           = remove_slash_quotes("Nombre del Servicio");
        $language['SP']['Service_Price']                          = remove_slash_quotes("Precio del servicio");
        $language['SP']['Service_Description_Length']             = remove_slash_quotes("Descripción del servicio");
        $language['SP']['Service_Button']                         = remove_slash_quotes("Botón de servicio");
        $language['SP']['Service_Button_URL']                         = remove_slash_quotes("URL del botón de servicio");
        $language['SP']['Service_URL']                            = remove_slash_quotes("URL de servicio");
        $language['SP']['Remove_Service']                         = remove_slash_quotes("Eliminar servicio");
        $language['SP']['Add_Service']                            = remove_slash_quotes("Añadir servicio");
        $language['SP']['Add_Category']                           = remove_slash_quotes("añadir categoría");
        $language['SP']['Remove_Category']                        = remove_slash_quotes("Eliminar categoría");
        $language['SP']['Restore']                                = remove_slash_quotes("Restaurar");
        $language['SP']['Backup']                                 = remove_slash_quotes("Apoyo");
        $language['SP']['Preview_List']                           = remove_slash_quotes("Lista de vista previa");
        $language['SP']['CATEGORY']                               = remove_slash_quotes("CATEGORÍA");
        $language['SP']['FONT_SETTINGS']                          = remove_slash_quotes("AJUSTES DE FUENTE");
        $language['SP']['ADD_TO_WEBPAGE']                         = remove_slash_quotes("AÑADIR A LA PAGINA WEB");
        
        
        //Franch
        
        $language['FR']['Select_Language']                        = remove_slash_quotes("Choisir la langue");
        $language['FR']['Select_Column']                          = remove_slash_quotes("Sélectionner une colonne");
        $language['FR']['Max_Width']                              = remove_slash_quotes("Largeur maximale");
        $language['FR']['Save']                                   = remove_slash_quotes("sauvegarder");
        $language['FR']['Price_List_Name']                        = remove_slash_quotes("Nom de la liste de prix");
        $language['FR']['Select_Style']                           = remove_slash_quotes("Sélectionnez le style");
        $language['FR']['More_Settings']                          = remove_slash_quotes("Plus de réglages");
        $language['FR']['Default_Tab']                            = remove_slash_quotes("Onglet par défaut");
        $language['FR']['Change_All_word_for_Categories']         = remove_slash_quotes('Changer le mot "All" pour les catégories');
        $language['FR']['different_languages']                    = remove_slash_quotes("différentes langues");
        $language['FR']['Display_the_All_word']                   = remove_slash_quotes('Afficher le mot "All"?');
        $language['FR']['Category_Separator_Symbol']              = remove_slash_quotes("Symbole de séparation de catégorie");
        $language['FR']['Stylish_Category_Tabs_Buttons']          = remove_slash_quotes("Boutons élégants de catégorie");
        $language['FR']['Break_title_of_Service']                 = remove_slash_quotes("Casser le titre du service");
        $language['FR']['Break_line_of_categories_on_Desktop']    = remove_slash_quotes("Briser la ligne de catégories sur le bureau");
        $language['FR']['Break_line_of_categories_on_Tablets']    = remove_slash_quotes("Briser la ligne de catégories sur les tablettes");
        $language['FR']['Price_List_Description']                 = remove_slash_quotes("Description de la liste de prix");
        $language['FR']['Title']                                  = remove_slash_quotes("Titre");
        $language['FR']['Category_Tabs']                          = remove_slash_quotes("Catégorie (onglets)");
        $language['FR']['Service_Name']                           = remove_slash_quotes("Nom du service");
        $language['FR']['Service_Price']                          = remove_slash_quotes("Prix du service");
        $language['FR']['Service_Description']                    = remove_slash_quotes("Description du service");
        $language['FR']['Font_Size']                              = remove_slash_quotes("Taille de police");
        $language['FR']['Font_Color']                             = remove_slash_quotes("Couleur de la police");
        $language['FR']['Font_Style']                             = remove_slash_quotes("Le style de police");
        $language['FR']['Hover_Color']                            = remove_slash_quotes("Couleur de vol stationnaire");
        $language['FR']['Category_Name']                          = remove_slash_quotes("Nom de catégorie");
        $language['FR']['Category_Description']                   = remove_slash_quotes("description de la catégorie");
        $language['FR']['Service_Name']                           = remove_slash_quotes("Nom du service");
        $language['FR']['Service_Price']                          = remove_slash_quotes("Prix du service");
        $language['FR']['Service_Description_Length']             = remove_slash_quotes("Description du service");
        $language['FR']['Service_Button']                         = remove_slash_quotes("Bouton de service");
        $language['FR']['Service_Button_URL']                         = remove_slash_quotes("URL du bouton de service");
        $language['FR']['Service_URL']                            = remove_slash_quotes("URL du service");
        $language['FR']['Remove_Service']                         = remove_slash_quotes("Supprimer le service");
        $language['FR']['Add_Service']                            = remove_slash_quotes("Ajouter un service");
        $language['FR']['Add_Category']                           = remove_slash_quotes("ajouter une catégorie");
        $language['FR']['Remove_Category']                        = remove_slash_quotes("Supprimer la catégorie");
        $language['FR']['Restore']                                = remove_slash_quotes("Restaurer");
        $language['FR']['Backup']                                 = remove_slash_quotes("Sauvegarde");
        $language['FR']['Preview_List']                           = remove_slash_quotes("Liste de prévisualisation");
        $language['FR']['CATEGORY']                               = remove_slash_quotes("CATÉGORIE");
        $language['FR']['FONT_SETTINGS']                          = remove_slash_quotes("PARAMÈTRES DE POLICE");
        $language['FR']['ADD_TO_WEBPAGE']                         = remove_slash_quotes("AJOUTER À LA PAGE WEB");
        
        //dutch
        
        $language['DE']['Select_Language']                        = remove_slash_quotes("Selecteer taal");
        $language['DE']['Select_Column']                          = remove_slash_quotes("Selecteer Kolom");
        $language['DE']['Max_Width']                              = remove_slash_quotes("Maximale wijdte");
        $language['DE']['Save']                                   = remove_slash_quotes("Opslaan");
        $language['DE']['Price_List_Name']                        = remove_slash_quotes("Prijslijst naam");
        $language['DE']['Select_Style']                           = remove_slash_quotes("Selecteer stijl");
        $language['DE']['More_Settings']                          = remove_slash_quotes("Meer instellingen");
        $language['DE']['Default_Tab']                            = remove_slash_quotes("Standaard tabblad");
        $language['DE']['Change_All_word_for_Categories']         = remove_slash_quotes('Wijzig het woord "Alles" voor Categorieën');
        $language['DE']['different_languages']                    = remove_slash_quotes("verschillende talen");
        $language['DE']['Display_the_All_word']                   = remove_slash_quotes('Toont het woord "Alles"?');
        $language['DE']['Category_Separator_Symbol']              = remove_slash_quotes("Categorie scheidingsteken symbool");
        $language['DE']['Stylish_Category_Tabs_Buttons']          = remove_slash_quotes("Stijlvolle knoppen voor categorietabs");
        $language['DE']['Break_title_of_Service']                 = remove_slash_quotes("Breek de titel van de service");
        $language['DE']['Break_line_of_categories_on_Desktop']    = remove_slash_quotes("Breek lijn van categorieën op Desktop");
        $language['DE']['Break_line_of_categories_on_Tablets']    = remove_slash_quotes("Breek lijn van categorieën op tablets");
        $language['DE']['Price_List_Description']                 = remove_slash_quotes("Prijslijst beschrijving");
        $language['DE']['Title']                                  = remove_slash_quotes("Titel");
        $language['DE']['Category_Tabs']                          = remove_slash_quotes("Categorie (tabbladen)");
        $language['DE']['Service_Name']                           = remove_slash_quotes("Servicenaam");
        $language['DE']['Service_Price']                          = remove_slash_quotes("Serviceprijs");
        $language['DE']['Service_Description']                    = remove_slash_quotes("Servicebeschrijving");
        $language['DE']['Font_Size']                              = remove_slash_quotes("Lettertypegrootte");
        $language['DE']['Font_Color']                             = remove_slash_quotes("Letterkleur");
        $language['DE']['Font_Style']                             = remove_slash_quotes("Lettertype");
        $language['DE']['Hover_Color']                            = remove_slash_quotes("Kleur zweven");
        $language['DE']['Category_Name']                          = remove_slash_quotes("categorie naam");
        $language['DE']['Category_Description']                   = remove_slash_quotes("categorie beschrijving");
        $language['DE']['Service_Name']                           = remove_slash_quotes("Servicenaam");
        $language['DE']['Service_Price']                          = remove_slash_quotes("Serviceprijs");
        $language['DE']['Service_Description_Length']             = remove_slash_quotes("Servicebeschrijving");
        $language['DE']['Service_Button']                         = remove_slash_quotes("Serviceknop");
        $language['DE']['Service_Button_URL']                         = remove_slash_quotes("De dienstknoop URL");
        $language['DE']['Service_URL']                            = remove_slash_quotes("Service URL");
        $language['DE']['Remove_Service']                         = remove_slash_quotes("Service verwijderen");
        $language['DE']['Add_Service']                            = remove_slash_quotes("Service toevoegen");
        $language['DE']['Add_Category']                           = remove_slash_quotes("categorie toevoegen");
        $language['DE']['Remove_Category']                        = remove_slash_quotes("Verwijder Categorie");
        $language['DE']['Restore']                                = remove_slash_quotes("Restaurer");
        $language['DE']['Backup']                                 = remove_slash_quotes("Sauvegarde");
        $language['DE']['Preview_List']                           = remove_slash_quotes("Liste de prévisualisation");
        $language['DE']['CATEGORY']                               = remove_slash_quotes("CATEGORIE");
        $language['DE']['FONT_SETTINGS']                          = remove_slash_quotes("INSTELLINGEN VAN DE FONT");
        $language['DE']['ADD_TO_WEBPAGE']                         = remove_slash_quotes("VOEG TOE AAN WEBPAGE");
        
        // return output
        
        return $language[$lang][$keyword];
        
    }
}    
 ?>