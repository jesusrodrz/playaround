<?php

  $custom_fields = array(
    'text' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[text]' );?>"><?php esc_html_e( 'Product code', 'sky-tulum' );?></label>
          <input type="text" name="<?php echo esc_attr($meta_id . '[text]' );?>" id="<?php echo esc_attr($meta_id . '[text]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['text'])){ echo esc_attr($meta['text']);} ?>">
          <?php esc_html_e( 'the nomber at the end of the url of the rezdy product', 'sky-tulum' );?>
        </div>
        <br>
      <?php
    },
    'title' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[title]' );?>"><?php esc_html_e( 'Primer Titular', 'sky-tulum' );?></label>
          <input type="text" name="<?php echo esc_attr($meta_id . '[title]' );?>" id="<?php echo esc_attr($meta_id . '[title]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['title'])){ echo esc_attr($meta['title']);} ?>">
          <!-- <?php esc_html_e( 'El valor por defecto es el titulo de la página', 'sky-tulum' );?> -->
        </div>
        <br>
      <?php
    },
    'link' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[link]' );?>"><?php esc_html_e( 'Leer más link', 'sky-tulum' );?></label>
          <div>
            <li>
              <?php esc_html_e( 'Texto', 'sky-tulum' );?>  <input type="text" name="<?php echo esc_attr($meta_id . '[link][name]' );?>" id="<?php echo esc_attr($meta_id . '[link][name]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['link']['name'])){ echo esc_attr($meta['link']['name']);} ?>">
            </li>
            <li>
              <?php esc_html_e( 'Link ref', 'sky-tulum' );?> <input type="text" name="<?php echo esc_attr($meta_id . '[link][ref]' );?>" id="<?php echo esc_attr($meta_id . '[link][ref]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['link']['ref'])){ echo esc_attr($meta['link']['ref']);} ?>">
            </li>
          </div>
        </div>
        <br>
      <?php
    },
    'linkcta' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[linkcta]' );?>"><?php esc_html_e( 'Link hacia página', 'sky-tulum' );?></label>
          <div>
            <li>
              <?php esc_html_e( 'texto del link', 'sky-tulum' );?>  <input type="text" name="<?php echo esc_attr($meta_id . '[linkcta][name]' );?>" id="<?php echo esc_attr($meta_id . '[linkcta][name]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['linkcta']['name'])){ echo esc_attr($meta['linkcta']['name']);} ?>">
            </li>
            <li>
              <?php esc_html_e( 'slug de la pagina', 'sky-tulum' );?> <input type="text" name="<?php echo esc_attr($meta_id . '[linkcta][ref]' );?>" id="<?php echo esc_attr($meta_id . '[linkcta][ref]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['linkcta']['ref'])){ echo esc_attr($meta['linkcta']['ref']);} ?>">
            </li>
          </div>
        </div>
        <br>
      <?php
    },
    'title-2' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[title2]' );?>"><?php esc_html_e( 'Titulo del feed', 'sky-tulum' );?></label>
          <input type="text" name="<?php echo esc_attr($meta_id . '[title2]' );?>" id="<?php echo esc_attr($meta_id . '[title2]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['title2'])){ echo esc_attr($meta['title2']);} ?>">
          <!-- <?php esc_html_e( 'El valor por defecto es el titulo de la página', 'sky-tulum' );?> -->
        </div>
        <br>
      <?php
    },
    'category' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[title2]' );?>"><?php esc_html_e( 'Categoría del feed', 'sky-tulum' );?></label>
          <select name="<?php echo esc_attr($meta_id . '[category]' );?>">
            <?php 
              $terms = get_terms('category');

              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):

                $value = (is_array($meta) && isset($meta['category'])) ? $meta['category'] : '';

              ?>
              <option  selected value> -- <?php esc_html_e( 'Seleciona una categoría', 'sky-tulum' );?> -- </option>
              <?php
                foreach ($terms as $term) :
           
                // endif;
              ?>
              <option value="<?php echo $term->term_id;?>" <?php echo ($term->term_id == $value )? 'selected' :'' ?>  > <?php echo $term->name;?></option>
              <?php
              ?>
            <?php
              endforeach;endif;
            ?>
          </select>
        </div>
        <br>
      <?php
    },
    'area' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[area]' );?>"><?php esc_html_e( 'Area', 'sky-tulum' );?></label>
          <div>
            <input type="text" name="<?php echo esc_attr($meta_id . '[area]' );?>" id="<?php echo esc_attr($meta_id . '[area]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['area'])){ echo esc_attr($meta['area']);} ?>">
          </div>
          <br>
        </div>
      <?php
    },
    'unit' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[area]' );?>"><?php esc_html_e( 'Unidad', 'sky-tulum' );?></label>
          <div>
            <input type="text" name="<?php echo esc_attr($meta_id . '[unit]' );?>" id="<?php echo esc_attr($meta_id . '[unit]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['unit'])){ echo esc_attr($meta['unit']);} ?>">
          </div>
          <br>
        </div>
      <?php
    },
    'type' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[type]' );?>"><?php esc_html_e( 'Tipo', 'sky-tulum' );?></label>
          <div>
            <input type="text" name="<?php echo esc_attr($meta_id . '[type]' );?>" id="<?php echo esc_attr($meta_id . '[type]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['type'])){ echo esc_attr($meta['type']);} ?>">
          </div>
          <br>
        </div>
      <?php
    },
    'total' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[total]' );?>"><?php esc_html_e( 'Total', 'sky-tulum' );?></label>
          <div>
            <input type="text" name="<?php echo esc_attr($meta_id . '[total]' );?>" id="<?php echo esc_attr($meta_id . '[total]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['total'])){ echo esc_attr($meta['total']);} ?>">
          </div>
          <br>
        </div>
      <?php
    },
    'level' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <?php 
            $unit = __('Unidad','sky-tulum');
            $type = __('Tipo','sky-tulum');
            $total = __('Total','sky-tulum');
            $item = __('Item','sky-tulum');
            $image = __('Imagen','sky-tulum');
            $sell = __('Vendido','sky-tulum');
            $select = __('Seleciona una imagen','sky-tulum');
            $selectB = __('Seleccionar','sky-tulum');
          ?>
          <?php for ($i = 0; $i <10; $i++):?>
            <div>
              <label style="font-weight: bold" class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[level]' );?>"><?php echo $item;?> <?php echo $i + 1 ; ?></label>
              <div>
                <label style="padding-left:2em;" class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[level]['.$i.'][unit]' );?>"><span style="width:4em; display:inline-block"><?php echo $unit;?></span>
                  <input type="text" name="<?php echo esc_attr($meta_id . '[level]['.$i.'][unit]' );?>" id="<?php echo esc_attr($meta_id . '[level]['.$i.'][unit]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['level'][$i]['unit'])){ echo esc_attr($meta['level'][$i]['unit']);} ?>">
                </label><br>
                <label style="padding-left:2em;" class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[level]['.$i.'][type]' );?>"><span style="width:4em; display:inline-block"><?php echo $type;?></span>
                  <input type="text" name="<?php echo esc_attr($meta_id . '[level]['.$i.'][type]' );?>" id="<?php echo esc_attr($meta_id . '[level]['.$i.'][type]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['level'][$i]['type'])){ echo esc_attr($meta['level'][$i]['type']);} ?>">
                </label><br>
                <label style="padding-left:2em;" class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[level]['.$i.'][total]' );?>"><span style="width:4em; display:inline-block"><?php echo $total;?></span>
                  <input type="text" name="<?php echo esc_attr($meta_id . '[level]['.$i.'][total]' );?>" id="<?php echo esc_attr($meta_id . '[level]['.$i.'][total]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['level'][$i]['total'])){ echo esc_attr($meta['level'][$i]['total']);} ?>">
                </label><br>
                <label style="padding-left:2em;" class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[level]['.$i.'][sell]' );?>"><span style="width:4em; display:inline-block"><?php echo $sell;?></span>
                  <input type="checkbox" name="<?php echo esc_attr($meta_id . '[level]['.$i.'][sell]' );?>" id="<?php echo esc_attr($meta_id . '[level]['.$i.'][sell]' );?>" class="regular-text" value="<?php echo $sell;?>" <?php if (is_array($meta) && isset($meta['level'][$i]['sell'])){ echo 'checked';} ?>>
                </label><br><br>
                <label style="padding-left:2em;" class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[level]['.$i.'][image]' );?>"><span style="width:4em; display:inline-block"><?php echo $image;?></span>
                  <div style="display:flex">
                    <figure style="display:table" class="gallery__fig images-field" id="imageField" data-title="<?php echo $select;?>" data-button="<?php echo $selectB;?>" >
                      <input class="gallery__input" type="text" value="<?php if (is_array($meta) && isset($meta['level'][$i]['image'][0])){ echo esc_attr($meta['level'][$i]['image'][0]);} ?>" name="<?php echo esc_attr($meta_id . '[level]['.$i.'][image][0]' );?>" id="<?php echo esc_attr($meta_id . '[level]['.$i.'][image][0]' );?>">
                      <?php if (is_array($meta) && isset($meta['level'][$i]['image'][0])){ 
                        ?>
                        <img width="100" class="gallery__img" src="<?php echo esc_attr($meta['level'][$i]['image'][0]); ?>"  >
                        <?php 
                        } 
                      ?>
                      <button class="gallery__btn gallery__close" ></button>
                    </figure>
                    <figure style="display:table" class="gallery__fig images-field" id="imageField" data-title="<?php esc_html_e( 'Seleciona una imagen', 'sky-tulum' );?>" data-button="<?php esc_html_e( 'Selecionar', 'sky-tulum' );?>" >
                      <input class="gallery__input" type="text" value="<?php if (is_array($meta) && isset($meta['level'][$i]['image'][1])){ echo esc_attr($meta['level'][$i]['image'][1]);} ?>" name="<?php echo esc_attr($meta_id . '[level]['.$i.'][image][1]' );?>" id="<?php echo esc_attr($meta_id . '[level]['.$i.'][image][1]' );?>">
                      <?php if (is_array($meta) && isset($meta['level'][$i]['image'][1])){ 
                        ?>
                        <img width="100" class="gallery__img" src="<?php echo esc_attr($meta['level'][$i]['image'][1]); ?>"  >
                        <?php 
                        } 
                      ?>
                      <button class="gallery__btn gallery__close" ></button>
                    </figure>
                  </div>
                </label>
              </div>
            
            </div>
            <br>
          <?php endfor;?>
        </div>
      <?php
    },
    'sell' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[sell]' );?>"><?php esc_html_e( 'Vendido', 'sky-tulum' );?></label>
          <!-- <input type="checkbox" name="<?php echo esc_attr($meta_id . '[sell]' );?>" id="<?php echo esc_attr($meta_id . '[sell]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['sell'])){ echo esc_attr($meta['area']);} ?>"> -->
          <input type="checkbox" name="<?php echo esc_attr($meta_id . '[sell]' );?>" id="<?php echo esc_attr($meta_id . '[sell]' );?>" class="regular-text" value="vendido" <?php if (is_array($meta) && isset($meta['sell'])){ echo 'checked';} ?>>
        </div>
        <br>
      <?php
    },
    'gallery' => function ($meta, $meta_id){
      ?>
        <fieldset class="gallery">
          <legend><?php esc_html_e( 'Galería', 'sky-tulum' );?></legend>
          <div class="gallery__container"  id="galleryContainer" data-title-s="<?php esc_html_e( 'Seleciona una imagen para reemplazar', 'sky-tulum' );?>"  data-button="<?php esc_html_e( 'Seleccionar', 'sky-tulum' );?>" data-title="<?php esc_html_e( 'Seleciona una o multiples imágenes', 'sky-tulum' );?>" data-name="<?php echo esc_attr( $meta_id . '[gallery]' );?>" >
            <!-- <button id="addBtn" ></button> -->
            <?php 
              if (is_array($meta) && isset($meta['gallery'])):
                $gallery_items = $meta['gallery'];
                foreach ($gallery_items as $index => $img):
                  ?>
                    <figure class="gallery__fig">
                      <input class="gallery__input" type="text" value="<?php echo esc_attr( $img );?>" name="<?php echo esc_attr($meta_id . '[gallery][' . $index . ']' );?>" id="<?php echo esc_attr($meta_id . '[gallery][' . $index . ']' );?>">
                      <img width="100" class="gallery__img" src="<?php echo esc_attr( $img );?>"  >
                      <button class="gallery__btn gallery__close" ></button>
                    </figure>
                  <?php
                endforeach;
              endif;
            ?>
            <button class="gallery__btn gallery__fig--add" id="addBtn"></button>
          </div>
          
        </fieldset>

          <div class="gallery-container" id="galleryContainer" >
            <?php 

              // if (is_array($meta) && isset($meta['gallery'])):
              //   $gallery_items = explode(',',$meta['gallery']);

              //   foreach ($gallery_items as &$chart_item):
              //     $chart_array = explode(' ',$chart_item);

              //     $chart_item = array(
              //       'url' => $chart_array[0],
              //       'id'  => $chart_array[1]
              //     );
              //     $chart_url = $chart_item['url'];

              //     $chart_id = attachment_url_to_postid($chart_url);
              //     $chart = wp_get_attachment_image_src($chart_id,'thumbnail');
              ?>

        </div>
      <?php
    },
    'image' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[image]' );?>"><?php esc_html_e( 'Imagen', 'sky-tulum' );?></label>
          <figure class="gallery__fig" id="imageField" data-title="<?php esc_html_e( 'Seleciona una imagen', 'sky-tulum' );?>" data-button="<?php esc_html_e( 'Selecionar', 'sky-tulum' );?>" >
            <input class="gallery__input" type="text" value="<?php if (is_array($meta) && isset($meta['image'])){ echo esc_attr($meta['image']);} ?>" name="<?php echo esc_attr($meta_id . '[image]' );?>" id="<?php echo esc_attr($meta_id . '[image]' );?>">
            <?php if (is_array($meta) && isset($meta['image'])){ 
              ?>
              <img width="100" class="gallery__img" src="<?php echo esc_attr($meta['image']); ?>"  >
              <?php 
              } 
            ?>
          </figure>
        </div>
        <br>
      <?php
    },
    'images' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[images][0]' );?>"><?php esc_html_e( 'Imagen 1', 'sky-tulum' );?></label>
          <figure class="gallery__fig images-field" data-title="<?php esc_html_e( 'Seleciona una imagen', 'sky-tulum' );?>" data-button="<?php esc_html_e( 'Selecionar', 'sky-tulum' );?>" >
            <input class="gallery__input" type="text" value="<?php if (is_array($meta) && isset($meta['images'][0])){ echo esc_attr($meta['images'][0]);} ?>" name="<?php echo esc_attr($meta_id . '[images][0]' );?>" id="<?php echo esc_attr($meta_id . '[images][0]' );?>">
            <?php if (is_array($meta) && isset($meta['images'][0])){ 
              ?>
              <img width="100" class="gallery__img" src="<?php echo esc_attr($meta['images'][0]); ?>"  >
              <?php 
              } 
            ?>
          </figure>
          <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[images][1]' );?>"><?php esc_html_e( 'Imagen 2', 'sky-tulum' );?></label>

          <figure class="gallery__fig images-field" data-title="<?php esc_html_e( 'Seleciona una imagen', 'sky-tulum' );?>" data-button="<?php esc_html_e( 'Selecionar', 'sky-tulum' );?>" >
            <input class="gallery__input" type="text" value="<?php if (is_array($meta) && isset($meta['images'][1])){ echo esc_attr($meta['images'][1]);} ?>" name="<?php echo esc_attr($meta_id . '[images][1]' );?>" id="<?php echo esc_attr($meta_id . '[images][1]' );?>">
            <?php if (is_array($meta) && isset($meta['images'][1])){ 
              ?>
              <img width="100" class="gallery__img" src="<?php echo esc_attr($meta['images'][1]); ?>"  >
              <?php 
              } 
            ?>
          </figure>
        </div>
        <br>
      <?php
    },
    'hero' => function ($meta, $meta_id){
      ?>
        <div class="custom-field" >
          <fieldset>
            <p><?php esc_html_e( 'Sección Banner ', 'sky-tulum' );?></p>
            <!-- <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[hero]' );?>"><?php esc_html_e( 'banner img', 'sky-tulum' );?></label> -->
            <div>
              <!-- <figure class="gallery__fig" id="heroField" data-title="<?php esc_html_e( 'Seleciona una imagen', 'sky-tulum' );?>" data-button="<?php esc_html_e( 'Selecionar', 'sky-tulum' );?>" >
                <input class="gallery__input" type="text" value="<?php if (is_array($meta) && isset($meta['hero']['img'])){ echo esc_attr($meta['hero']['img']);} ?>" name="<?php echo esc_attr($meta_id . '[hero][img]' );?>" id="<?php echo esc_attr($meta_id . '[hero][img]' );?>">
                <?php if (is_array($meta) && isset($meta['hero']['img'])){ 
                  ?>
                  <img width="100" class="gallery__img" src="<?php echo esc_attr($meta['hero']['img']); ?>"  >
                  <?php 
                  } 
                ?>
                </figure> -->
              <div>
                <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[hero]' );?>"><?php esc_html_e( 'Titulo', 'sky-tulum' );?></label>
                <div>
  
                  <input type="text" name="<?php echo esc_attr($meta_id . '[hero][title]' );?>" id="<?php echo esc_attr($meta_id . '[hero][title]' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['hero']['title'])){ echo esc_attr($meta['hero']['title']);} ?>">
                </div>
              </div>
              <div>
                <legend><?php esc_html_e( 'Slider de imagenes', 'sky-tulum' );?></legend>
                <div class="gallery__container"  id="sliderContainer" data-title-s="<?php esc_html_e( 'Seleciona una imagen para reemplazar', 'sky-tulum' );?>"  data-button="<?php esc_html_e( 'Seleccionar', 'sky-tulum' );?>" data-title="<?php esc_html_e( 'Seleciona una o multiples imágenes', 'sky-tulum' );?>" data-name="<?php echo esc_attr( $meta_id . '[hero][gallery]' );?>" >
                  <!-- <button id="addBtn" ></button> -->
                  <?php 
                    if (is_array($meta) && isset($meta['hero']['gallery'])):
                      $gallery_items = $meta['hero']['gallery'];
                      foreach ($gallery_items as $index => $img):
                        ?>
                          <figure class="gallery__fig">
                            <input class="gallery__input" type="text" value="<?php echo esc_attr( $img );?>" name="<?php echo esc_attr($meta_id . '[hero][gallery][' . $index . ']' );?>" id="<?php echo esc_attr($meta_id . '[hero][gallery][' . $index . ']' );?>">
                            <img width="100" class="gallery__img" src="<?php echo esc_attr( $img );?>"  >
                            <button class="gallery__btn gallery__close" ></button>
                          </figure>
                        <?php
                      endforeach;
                    endif;
                  ?>
                  <button class="gallery__btn gallery__fig--add" id="sliderAddBtn"></button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <br>
      <?php
    },
    'list' => function ($meta, $meta_id){
      ?>
        <div class="custom-field list" >
            <label class="custom-fields__label" for="<?php echo esc_attr($meta_id . '[list]' );?>"><?php esc_html_e( 'Lista', 'sky-tulum' );?></label>
            <ol>
              <?php for ($i = 0; $i <10; $i++):  ?>
                <li><input type="text" name="<?php echo esc_attr($meta_id . '[list]['.$i.']' );?>" id="<?php echo esc_attr($meta_id . '[list]['.$i.']' );?>" class="regular-text" value="<?php if (is_array($meta) && isset($meta['list'][$i])){ echo esc_attr($meta['list'][$i]);} ?>"></li>
              <?php endfor; ?>
            </ol>
        </div>
        <br>
      <?php
    }

  );

  // $custom_pages['home'] = array(
  //   'name'           =>   __('home','sky-tulum'),
  //   'template'       =>   'home.php',
  //   'custom-fields'  =>   array(
  //     $custom_fields['hero'],
  //     $custom_fields['title'],
  //     $custom_fields['gallery']
  //   )
  // );
  // $custom_pages['proyecto'] = array(
  //   'name'           =>   __('proyecto','sky-tulum'),
  //   'template'       =>   'proyect.php',
  //   //custom-field must be a array
  //   'custom-fields'  =>   array(
  //     $custom_fields['hero'],
  //     $custom_fields['image'],
  //     // $custom_fields['images'],
  //     $custom_fields['linkcta']
  //     // $custom_fields['text'],
  //   ) 
  // );
  // $custom_pages['modelos'] = array(
  //   'name'           =>   __('modelos','sky-tulum'),
  //   'template'       =>   'models.php',
  //   //custom-field must be a array
  //   'custom-fields'  =>   array(
  //     $custom_fields['hero'],
  //     // $custom_fields['image'],
  //     // $custom_fields['list'],
  //   ) 
  // );
  // $custom_pages['tulum'] = array(
  //   'name'           =>   __('tulum','sky-tulum'),
  //   'template'       =>   'tulum.php',
  //   //custom-field must be a array
  //   'custom-fields'  =>   array(
  //     $custom_fields['hero'],
  //     $custom_fields['title'],
  //     $custom_fields['link'],
  //     $custom_fields['title-2'],
  //     $custom_fields['category']
  //   ) 
  // );
  // $custom_pages['posts'] = array(
  //   'name'           =>   __('post','sky-tulum'),
  //   'template'       =>   'posts.php',
  //   //custom-field must be a array
  //   'custom-fields'  =>   array(
  //     $custom_fields['category']
  //   ) 
  // );

  