<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notice>
 */
class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mollis, magna at dignissim imperdiet, ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mollis, magna at dignissim imperdiet, metus tellus elementum orci, id mattis ligula elit consequat massa. Sed suscipit sapien sit amet nisl scelerisque,',
            'image' => 'gambar',
            'created_at' => '24 june 2024',
            'updated_at' => '25 june 2024',
        ];
    }
}
