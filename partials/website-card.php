        <a href="websites/<?php echo $item['slug']; ?>">
            <div class="scale-100 hover:scale-105 duration-1000 border-2 border-gray-900 rounded-lg">
              <div class="flex justify-between px-2 bg-gray-900 text-white font-extralight text-center py-1 tracking-wide -mb-0.5 mx-0">
                <div></div>
                <p><?php echo substr($item['pretty_url'], 0, 20) . (strlen($item['pretty_url']) > 25 ? '...' : ''); ?></p>
                <div class="flex items-center space-x-1">
                  <span class="min-w-fit w-3 h-3 bg-green-400 block rounded-full"></span>
                  <span class="min-w-fit w-3 h-3 bg-red-400 block rounded-full"></span>
                  <span class="min-w-fit w-3 h-3 bg-yellow-400 block rounded-full"></span>
                </div>
              </div>
              <img src="assets/imgs/<?php echo $item['img_folder']; ?>/<?php echo $item['img_cover']; ?>" alt="Screenshot of <?php echo $item['title']; ?> website" class="w-full h-auto object-contain">
            </div>
          </a>
