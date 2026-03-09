<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExpandSaigonNoirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = BlogPost::where('slug', 'saigon-noir-hanh-trinh-qua-nhung-mang-toi')->first();
        
        if ($post) {
            $post->update([
                'title' => 'Saigon Noir: Hành trình xuyên đêm qua những mảng tối đầy mê hoặc',
                'excerpt' => 'Khám phá một Sài Gòn rất khác khi màn đêm buông xuống—nơi ánh đèn neon hòa quyện cùng những con hẻm sâu hút, tạo nên một bản giao hưởng của ánh sáng và bóng đổ.',
                'content' => '
                    <p>Sài Gòn ban ngày là một bản nhạc rock sôi động, ồn ào và vội vã. Nhưng khi những tia nắng cuối cùng tắt hẳn sau tòa nhà Bitexco, thành phố này đột ngột chuyển mình. Nó trở nên tĩnh lặng hơn, bí ẩn hơn, và mang một vẻ đẹp điện ảnh khó cưỡng mà tôi gọi là <strong>Saigon Noir</strong>.</p>

                    <p>Hành trình tìm kiếm những mảng tối của tôi không đơn thuần là việc đi chụp ảnh đêm. Đó là một nỗ lực để bắt trọn "linh hồn" của một đô thị đang chuyển mình, nơi cái cũ và cái mới đan xen dưới ánh đèn đường vàng vọt.</p>

                    <img src="https://images.unsplash.com/photo-1583417319070-4a69db38a482?q=80&w=2070&auto=format&fit=crop" alt="Saigon at Night Cityscape">

                    <h2>1. Những con hẻm: Nơi bóng tối bắt đầu</h2>
                    <p>Nếu bạn muốn thực sự hiểu về Saigon Noir, hãy rời bỏ những đại lộ rực rỡ và bước vào những con hẻm nhỏ ở Quận 1, Quận 4 hay Quận 3. Ở đó, ánh sáng chỉ là những vệt mỏng manh xuyên qua kẽ lá, hoặc hắt ra từ một quán hủ tiếu gõ muộn màng.</p>

                    <p>Trong nhiếp ảnh Noir, bóng tối không phải là kẻ thù. Bóng tối là người bạn đồng hành. Nó giúp ta che giấu những chi tiết thừa thãi, để ánh sáng tập trung hoàn toàn vào một gương mặt, một chiếc xích lô cũ kỹ, hay làn khói từ một nồi nước lèo bốc lên nghi ngút.</p>

                    <blockquote>
                        "Bóng tối không phải là sự vắng mặt của ánh sáng, mà là một sự hiện diện đầy quyền lực."
                    </blockquote>

                    <img src="/storage/blog/saigon_alleyway_night.png" alt="Narrow Saigon Alleyway at Night">

                    <h2>2. Kỹ thuật phơi sáng: Vẽ bằng thời gian</h2>
                    <p>Để bắt được những vệt đèn xe kéo dài như những dòng sông ánh sáng, tôi thường sử dụng kỹ thuật phơi sáng lâu (Long Exposure). Điều này đòi hỏi sự kiên nhẫn và một chiếc chân máy vững chãi trước những cơn gió đêm ven sông Sài Gòn.</p>
                    
                    <ul>
                        <li><strong>ISO thấp:</strong> Để giữ cho vùng tối luôn "sạch", không bị nhiễu hạt (noise).</li>
                        <li><strong>Khẩu độ hẹp:</strong> Giúp các ánh đèn đường tạo ra hiệu ứng tia (starburst) đẹp mắt.</li>
                        <li><strong>Tốc độ màn trập chậm:</strong> Từ 10 đến 30 giây để làm mờ mọi chuyển động của dòng người, chỉ để lại những vệt sáng hư ảo.</li>
                    </ul>

                    <img src="/storage/blog/saigon_river_long_exposure.png" alt="Saigon River Long Exposure">

                    <h2>3. Màu sắc của đêm: Giữa Cyan và Orange</h2>
                    <p>Đêm Sài Gòn mang một hệ màu đặc trưng. Đó là sự tương phản giữa sắc xanh lạnh của bầu trời đêm và ánh cam nồng ấm từ đèn cao áp. Sự giao thoa này tạo nên cảm giác "Cinematic" cực kỳ mạnh mẽ, gợi nhớ đến những bộ phim của Vương Gia Vệ.</p>

                    <p>Tôi thường điều chỉnh nhiệt độ màu (White Balance) hơi thiên về xanh để làm nổi bật nét hiện đại, nhưng vẫn giữ lại những điểm nhấn vàng cam để không mất đi hơi ấm của sự sống.</p>

                    <h2>4. Lời kết cho những kẻ mộng mơ</h2>
                    <p>Chụp ảnh đêm là một kiểu thiền định. Giữa không gian tĩnh lặng, bạn lắng nghe thành phố thở, quan sát những cuộc đời mưu sinh lúc 2 giờ sáng, và học cách tôn trọng từng mảng tối.</p>

                    <p>Sài Gòn chưa bao giờ ngủ, nó chỉ đang mơ. Và nhiệm vụ của chúng ta, những nhiếp ảnh gia, là ghi lại những giấc mơ đó qua ống kính của mình.</p>
                    
                    <img src="https://images.unsplash.com/photo-1528605105345-5344ea20e269?q=80&w=2070&auto=format&fit=crop" alt="Street stall at night">

                    <p>Hy vọng bài viết dài hơi này sẽ mang lại cho bạn một nguồn cảm hứng mới để xách máy ảnh lên và dạo bước qua những mảng tối đầy quyến rũ của thành phố chúng ta.</p>
                ',
                'reading_time' => 12,
            ]);
        }
    }
}
