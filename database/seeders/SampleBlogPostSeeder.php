<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SampleBlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::create([
            'title' => 'Nghệ thuật Bóng đổ: Tìm kiếm cái Đẹp trong những Mảng tối',
            'slug' => 'nghe-thuat-bong-do-tim-kiem-cai-dep',
            'excerpt' => 'Trong nhiếp ảnh, ánh sáng là yếu tố quan trọng nhất, nhưng chính những mảng tối và bóng đổ mới là điều tạo nên chiều sâu và sự bí ẩn cho một bức ảnh.',
            'content' => '
                <p>Nhiều người mới bắt đầu học nhiếp ảnh thường có xu hướng tìm kiếm những nơi có ánh sáng hoàn hảo, rực rỡ và đồng đều. Tuy nhiên, khi bạn tiến xa hơn trên con đường này, bạn sẽ nhận ra rằng <strong>bí mật của một bức ảnh hút hồn thường nằm ở những gì không được chiếu sáng</strong>.</p>

                <h2>Tại sao bóng đổ lại quan trọng?</h2>
                <p>Bóng đổ không chỉ là sự vắng mặt của ánh sáng. Chúng là những thực thể mang tính dẫn dắt, tạo ra hình khối (texture) và định hình không gian. Trong thể loại nhiếp ảnh đường phố (Street Photography) hay Noir, bóng đổ đóng vai trò là "nhân vật chính".</p>

                <blockquote>
                    "Ánh sáng tạo nên vẻ đẹp của vạn vật, nhưng bóng đổ tạo nên chiều sâu của tâm hồn."
                </blockquote>

                <h3>1. Tạo ra sự tương phản mạnh mẽ (High Contrast)</h3>
                <p>Sử dụng độ tương phản cao giữa vùng sáng và vùng tối giúp người xem tập trung ngay lập tức vào chủ thể. Kỹ thuật này thường được gọi là <em>Chiaroscuro</em>, bắt nguồn từ thời Phục hưng trong hội họa.</p>
                
                <p>Khi bạn chụp một chân dung mờ ảo giữa một con hẻm tại Sài Gòn lúc 10 giờ sáng, bóng của những tòa nhà đổ xuống tạo ra những đường kẻ hình học sắc lẹm, đó chính là lúc phép màu xảy ra.</p>

                <h3>2. Kể một câu chuyện bí ẩn</h3>
                <ul>
                    <li>Bóng của một người đi bộ dài dằng dặc trên mặt đường.</li>
                    <li>Ánh nắng xuyên qua cửa sổ tạo thành những song sắt ảo ảnh.</li>
                    <li>Chỉ một phần khuôn mặt lộ ra khỏi bóng tối, gợi sự tò mò.</li>
                </ul>

                <h2>Cách làm chủ bóng đổ trong các bức ảnh của bạn</h2>
                <p>Để tận dụng tối đa bóng đổ, hãy thử chụp vào "Giờ Vàng" (Golden Hour) hoặc khi mặt trời lên cao nhất để có những đường bóng sắc sảo. Đừng sợ việc "mất chi tiết" vùng tối (crushed blacks) nếu điều đó phục vụ cho mục đích nghệ thuật của bạn.</p>

                <p>Hãy nhớ rằng, trong nhiếp ảnh, đôi khi <strong>ít hơn lại là nhiều hơn</strong>. Việc che giấu bớt chi tiết trong bóng tối giúp trí tưởng tượng của người xem được tự do bay bổng.</p>
            ',
            'category' => 'PHOTOGRAPHY',
            'published_at' => Carbon::now(),
            'image_url' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=2070&auto=format&fit=crop',
            'status' => 'Published',
            'is_featured' => true,
            'reading_time' => 5,
        ]);
    }
}
