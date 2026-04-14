<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PermissionResource\Pages;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Spatie\Permission\Models\Permission;

class PermissionResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static string | \Filament\Support\Contracts\IconIdentifier | \Illuminate\Contracts\Support\Htmlable | null $navigationIcon = 'heroicon-o-key';

    protected static ?string $modelLabel = 'صلاحية';

    protected static ?string $pluralModelLabel = 'قائمة الصلاحيات';

    protected static string | \UnitEnum | null $navigationGroup = 'الإعدادات المتقدمة';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                \Filament\Schemas\Components\Section::make('معلومات الصلاحية')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('name')
                            ->label('اسم الصلاحية (برمجياً)')
                            ->placeholder('e.g. view_users')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        \Filament\Forms\Components\Select::make('roles')
                            ->label('الأدوار المرتبطة')
                            ->multiple()
                            ->relationship('roles', 'name')
                            ->preload(),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('name')
                    ->label('اسم الصلاحية')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPermissions::route('/'),
        ];
    }
}
