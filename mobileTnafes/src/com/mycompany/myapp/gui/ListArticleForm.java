/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.mycompany.myapp.entities.Article;
import com.mycompany.myapp.entities.Categorie;
import com.mycompany.myapp.services.ServiceArticle;
import com.mycompany.myapp.services.ServiceCategorie;
import com.mycompany.myapp.services.ServiceTask;
import java.util.ArrayList;

/**
 *
 * @author bhk
 */
public class ListArticleForm extends Form{

    public ListArticleForm(Form previous) {
        setTitle("List articles");
        
        SpanLabel sp = new SpanLabel();
        
        
        ArrayList<Article> list =ServiceArticle.getInstance().getAllArticle();
        for(Article ar : list)
        {  
  
           // String urlm="https://www.englishspectrum.com/wp-content/uploads/2016/07/review-a.jpg";
            String urlm="file:///C:/Users/HP/Desktop/img/"+ar.getImage();
            Image placeholder = Image.createImage(120,90);
            EncodedImage enc= EncodedImage.createFromImage(placeholder, false);
            URLImage urlimage = URLImage.createToStorage(enc, urlm, urlm,URLImage.RESIZE_SCALE);
  
            addButton(urlimage,ar);
       
        }
        //sp.setText(ServiceArticle.getInstance().getAllArticle().toString());
        add(sp);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
    }
    
    
    private void addButton(Image img,Article a) {
          
      int height = Display.getInstance().convertToPixels(20.5f);
       int width = Display.getInstance().convertToPixels(23);
       Button image = new Button(img.fill(width, height));
       image.setUIID("Label");
       Container cnt = BorderLayout.west(image);

       
      // cnt.setLeadComponent(image);
         
         Label Titre = new Label("Titre de l'article:"+a.getTitre(),"NewsBottomLine");
         Label Description = new Label("Description:"+a.getDescription(),"NewsBottomLine");
         Label Date = new Label("Date d'ajout:"+a.getDate(),"NewsBottomLine");
         
         
         
         
           //   FontImage.setMaterialIcon(titre, FontImage.MATERIAL_TITLE);
           //   FontImage.setMaterialIcon(text, FontImage.MATERIAL_TEXT_FIELDS);
       
             //button delete
            Label supp=new Label("delete");  
            supp.setUIID("NewsTopLine");
            Style suppStyle = new Style(supp.getUnselectedStyle());
            suppStyle.setFgColor(0xf21f1f);
            FontImage suppImage=FontImage.createMaterial(FontImage.MATERIAL_DELETE, suppStyle);
            supp.setIcon(suppImage);
            supp.setTextPosition(RIGHT);
             supp.addPointerPressedListener(e -> {
            Dialog dig = new Dialog("delete");
            if(dig.show("delete","supprimer cet article ?","Cancel","oui")){ dig.dispose();}
            else{dig.dispose();}
                 System.out.println("supp");
            if(ServiceArticle.getInstance().deletearticle(a.getId()));
            
            }
            );
             //button update
             
//            Label update=new Label("update");  
//            update.setUIID("NewsTopLine");
//            Style updateStyle = new Style(supp.getUnselectedStyle());
//            suppStyle.setFgColor(0xf21f1f);
//            FontImage updateImage=FontImage.createMaterial(FontImage.MATERIAL_UPDATE, updateStyle);
//            update.setIcon(updateImage);
//            update.setTextPosition(RIGHT);
//            update.addPointerPressedListener(e5 -> {
//                int id2=c.getId();
//             System.out.println("/////////////////////////////////////////////////");
//             System.out.println(id2);
//             System.out.println("/////////////////////////////////////////////////");
//             new UpdateCategorieForm(current,c,c.getNom()).show();
//            }
//            );
                 
            
            
       cnt.add(BorderLayout.CENTER, 
               BoxLayout.encloseY(
                       BoxLayout.encloseX(Titre),

                        BoxLayout.encloseX(Description),
                        BoxLayout.encloseX(Date),

                       // BoxLayout.encloseX(Rating,etoile),
                                                   //       for ( int i=0;i<rat;i++ ) {}
                        
                        
//                        BoxLayout.encloseX(supp,update)
                        BoxLayout.encloseX(supp)
                        


               ));
        
       add(cnt);
      // image.addActionListener(e -> ToastBar.showMessage( FontImage.MATERIAL_INFO));
   }
    
    
}
