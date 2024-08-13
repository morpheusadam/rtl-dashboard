<?php 

$messages = [

    // general messages
    'process_success_message' => 'عملیات با موفقیت انجام شد',
    'successful_process_message' => 'عملیات موفقیت‌آمیز',
    'store_success_message' => 'با موفقیت اضافه شد',
    'update_success_message' => 'با موفقیت به‌روزرسانی شد',
    'destroy_success_message' => 'با موفقیت حذف شد',

];

// Entity Name => Display Text 
$entities = [
    'article' => 'مقاله',
    'category' => 'دسته‌بندی',
    'contact' => 'درخواست تماس',
];

foreach ($entities as $entity_name => $display_text) {
    $messages[$entity_name . '_store_success_message'] = $display_text . ' با موفقیت اضافه شد';
    $messages[$entity_name . '_update_success_message'] = $display_text . ' با موفقیت به‌روزرسانی شد';
    $messages[$entity_name . '_destroy_success_message'] = $display_text . ' با موفقیت حذف شد';
}

return $messages;